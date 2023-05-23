<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use App\Models\Seance;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Log;

class GetSeancesList implements ShouldQueue
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

		$request = 'https://api.tickets.yandex.net/api/agent/?action=event.list&offset=0&limit=500&city_id='.$cid_teatr.'&auth='.$auth;

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
				$events = $json['result'];
				//var_dump($events);
				
				if( \DB::table('seances')->update(['is_cancel' => 1]) ) {
					foreach($events as $key => $event) {
						//Log::channel('teatrapich')->info($event);
						if(!Seance::updateOrCreate(
							[
								'id' => $event['id'],
								'date' => $event['date'],
								'activity_id' => $event['activity_id']
							],
							[
								'name' => $event['name'],
								'venue_id' => $event['venue_id'],
								'version_id' => $event['version_id'],
								'venue' => $event['venue'],
								'version' => $event['version'],
								'widget' => $event['widget'],
								'min_price' => $event['min_price'],
								'max_price' => $event['max_price'],
								'genres_id' => $event['genres_id'],
								'age' => $event['age'],
								'image' => $event['image'],
								'image_list' => $event['image_list'],
								'image_poster' => $event['image_poster'],
								'city_id' => $event['city_id'],
								'close_to' => $event['close_to'],
								'organizer_id' => $event['organizer_id'],
								'object_version' => $event['object_version'],
								'is_cancel' => 0
							]
						)) {
							Log::channel('teatrapich')->info('Event '.$event['id'].' - '.$event['name'].' NOT saved!');
						}
					}
				}
			}
		}
		
    //end
	}
}