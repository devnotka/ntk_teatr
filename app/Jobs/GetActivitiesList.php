<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Activity;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Log;

class GetActivitiesList implements ShouldQueue
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

		$request = 'https://api.tickets.yandex.net/api/agent/?action=activity.list&offset=0&limit=500&city_id='.$cid_teatr.'&auth='.$auth;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $request);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);

		$json = json_decode($response, true);
		
		//var_dump($json);
		
		if(intval($json['status']) === 0) {
			if(array_key_exists('result', $json)) {
				$activities = $json['result'];
				//var_dump($activities);
				
				foreach($activities as $key => $activity) {
					// create array for upsert
					$acts[$key]['id'] = $activity['id'];
					$acts[$key]['name'] = $activity['name'];
					$acts[$key]['age'] = $activity['age'];
					$acts[$key]['image'] = $activity['image'];
					$acts[$key]['image_list'] = $activity['image_list'];
					$acts[$key]['image_poster'] = $activity['image_poster'];
					$acts[$key]['description'] = $activity['description'];
					$acts[$key]['city_id'] = $activity['city_id'];
					$acts[$key]['is_ya_permanent'] = $activity['is_ya_permanent'];
					$acts[$key]['is_ya_allday'] = $activity['is_ya_allday'];
					$acts[$key]['is_tour'] = $activity['is_tour'];
					$acts[$key]['object_version'] = $activity['object_version'];
					$acts[$key]['pro_culture_id'] = $activity['pro_culture_id'];
				}
				
				// upsert
				if(!Activity::upsert(
					$acts, 
					['id'], 
					['name','age','image','image_list','image_poster','description','city_id','is_ya_permanent','is_ya_allday','is_tour','object_version','pro_culture_id']
				)) {
					Log::channel('teatrapich')->info('Activities NOT saved!');
				}
			}
		}
		
    //end
	}
}