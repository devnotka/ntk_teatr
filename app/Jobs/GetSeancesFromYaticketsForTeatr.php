<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Event;
use App\Models\Seance;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class GetSeancesFromYaticketsForTeatr implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
		//print("Run job!\n");
		$login = env('APP_YATICKETS_API_TEATR_LOGIN', false);
		$pass = env('APP_YATICKETS_API_TEATR_PASS', false);
		$cid_teatr = env('APP_YATICKETS_API_TEATR_CID', false);

		$timestamp = time();
		$md5_pass = md5($pass);
		$sha1 = sha1($md5_pass.$timestamp);

		$auth = $login.':'.$sha1.':'.$timestamp;

		$request = 'https://api.tickets.yandex.net/api/agent/?action=event.list&offset=0&limit=1000&city_id='.$cid_teatr.'&auth='.$auth;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		$json = json_decode($response, true);
		
		$ya_seances = [];
		
		if(intval($json['status']) === 0) {
			if(array_key_exists('result', $json)) {
				$activities = $json['result'];
				foreach($activities as $key => $activity) {
					if(array_key_exists('id', $activity) && $activity['id'] != '') {
						if(array_key_exists('venue_id', $activity) && $activity['venue_id'] === 1148721) {
							
							$date = (array_key_exists('date', $activity) && $activity['date'] != '' && $activity['date'] != null) 
								? $activity['date'] : 'NULL';
							$zal_id = (array_key_exists('version_id', $activity) && $activity['version_id'] != '' && $activity['version_id'] != null) 
								? $activity['version_id'] : 'NULL';
							$organizer_id = (array_key_exists('organizer_id', $activity) && $activity['organizer_id'] != '' && $activity['organizer_id'] != null) 
								? $activity['organizer_id'] : 'NULL';
							
							array_push($ya_seances, [
								'id' => $activity['id'],
								'yatickets_id' => (array_key_exists('activity_id', $activity) && $activity['activity_id'] != '' && $activity['activity_id'] != null) 
									? $activity['activity_id'] : null,
								'datetimestamp' => ($date != 'NULL') 
									? (\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date, 'Europe/Moscow')->timestamp) * 1000 : null,
								'zal' => ($zal_id === 1148726) 
									? 'Основной зал' : 'Малый зал',
								'min_price' => (array_key_exists('min_price', $activity) && $activity['min_price'] != '' && $activity['min_price'] != null) 
									? $activity['min_price'] : null,
								'max_price' => (array_key_exists('max_price', $activity) && $activity['max_price'] != '' && $activity['max_price'] != null) 
									? $activity['max_price'] : null,
								'organizer_is_teatr' => ($organizer_id === 1137537) 
									? 1 : 0,
							]);
						
						}
					}
				}
			}
		}
		
		//var_dump($ya_seances);
		
		if(count($ya_seances) > 0) {
			
			$ids = Arr::pluck($ya_seances, 'id');
			$seances = Seance::whereIn('id', $ids)->get();
			//var_dump($seances);
			
			if($seances) {
				foreach($ya_seances as $key => $ya_seance) {
					$seance = $seances->firstWhere('id', $ya_seance['id']);
					if($seance->yatickets_id != $ya_seance['yatickets_id']) {
						var_dump('id "'.$seance->id.'": /zamena/ FROM yatickets_id "'.$seance->yatickets_id.'" TO yatickets_id "'.$ya_seance['yatickets_id'].'"');
					}
					if($seance->datetimestamp != $ya_seance['datetimestamp']) {
						var_dump('id "'.$seance->id.'": /perenos/ FROM datetimestamp "'.$seance->datetimestamp.'" TO datetimestamp "'.$ya_seance['datetimestamp'].'"');
					}
				}
			}
			
			/*Seance::upsert(
				$ya_seances,
				['id'],
				['yatickets_id', 'datetimestamp', 'zal', 'min_price', 'max_price', 'organizer_is_teatr']
			);*/
		
		}
		
		//$yatickets_ids = Arr::pluck($ya_seances, 'yatickets_id');
		//var_dump($yatickets_ids);
		
		//$events = Event::whereIn('yatickets_id', $yatickets_ids)->get();
		//var_dump(count($events));
		
		
		
    //end
	}
}
