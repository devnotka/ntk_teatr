<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Carbon\Carbon;
use Illuminate\Support\Str;

use DB;

use App\Models\Cancel;
use App\Models\Replace;

class Event extends Model
{
	
	protected $primaryKey = 'id';
	
	protected $casts = [
		'extraFields' => 'object',
		'image' => 'object',
		'gallery' => 'object',
		'category' => 'object',
		'tags' => 'object',
		'places' => 'object',
		'seances' => 'object',
		'videoHostings' => 'object',
		'start' => 'timestamp',
		'end' => 'timestamp',
	];
	
	public function activity()
	{
		return $this->hasOne(Activity::class, 'pro_culture_id', 'id')->orderBy('created_at', 'desc');
	}
	
	//Array of Repertuar Ids
	protected $array_repertuar = [
		202462,
		389025,
		116665,
		103010,
		169031,
		721377,
		202499,
		159509,
		24387,
		388993,
		67836,
		564188,
		721371,
		721370,
		734384,
		24390,
		721367,
		734208,
		1247396,
		734229,
		462517,
		734349,
		564202,
		80269,
		1620182,
		389557,
		1247393,
		885207,
		1334872,
		1398698,
		1353684,
		1450969,
		1491928,
		1401911,
		1688832,
		1688842,
		1862475,
		2090749,
		2280648,
		2482089,
		771643,
		2509872,
		771643,
		2896474
	];
	
	// Model functions:
	
	public function getEventById($id) {
		return $this->find($id);
	}
	
	public function getTrancatedStr($str, $limit) {
		$truncated = Str::limit(strip_tags(html_entity_decode($str)), intval($limit));
		$last_space_pos = strrpos($truncated, ' ');
		$result = substr($truncated, 0, $last_space_pos);
		return $result.'&nbsp;...';
	}
	
	public function getEpochToDatetime($value) {
		return (new Carbon($value / 1000))->setTimezone('Europe/Moscow')->translatedFormat('j F H:i l');
	}
	
	public function getExplodeImagename($imagename, $w = null, $h = null) {
		$mk_server = 'https://mk.mrgcdn.ru/';
		$pts = explode('.', $imagename);
		$imgname = $pts[0];
		$ext = $pts[1];
		if($w != null && $h != null) {
			$img = $mk_server.$imgname.'_w'.$w.'_h'.$h.'.'.$ext;
		} else {
			$img = $mk_server.$imagename;
		}
		return $img;
	}
	
	public function getEndAttribute($value) {
		return (new Carbon($value / 1000))->setTimezone('Europe/Moscow')->format('d M Y H:i');
	}
	
	public function getActualSeancesFromSeancesArray($seances_array) {
		foreach($seances_array as $key => $seance) {
			if($seance->start < \Carbon\Carbon::now()->getPreciseTimestamp(3) || $seance->start > \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
				unset($seances_array[$key]);
			}
		}
		return $seances_array;
	}
	
	public function getActualSeancesFromArrayJsons() {
		
		DB::enableQueryLog();
		
		$events = $this->where(function($query) {
						foreach(DB::raw("JSON_LENGTH(`seances`)") as $key => $json) {
							$query->where(DB::raw("json_extract(`seances`, '$".[$key].".\"start\"')"), '>', intval('1645200000000'));
						}
					})
					->where(function($query) {
						$query->where('status', 'accepted')
						->orWhere('inAccepted', 1);
					})
					->get();
					
					//dd(DB::getQueryLog());
		
		return $events;
	}
	
	// Home
	public function getActualSeanceForBPB() {
		$actual_seance_for_bigpromoblock = [];
		$events_premiers =  $this->whereJsonContains('extraFields->premiere', true)
						->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
						->where(function($query) {
							$query->where('status', 'accepted')
							->orWhere('inAccepted', 1);
						})
						->orderBy('id', 'DESC')
						->get();
		$events_premiers_ids = [];
		foreach($events_premiers as $event) {
			array_push($events_premiers_ids, $event->id);
			foreach($event->seances as $seance) {
				if($seance->end >= \Carbon\Carbon::now()->getPreciseTimestamp(3) && $seance->start < \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
					array_push($actual_seance_for_bigpromoblock, array(
							'id' => $event->id, 
							'start' => $this->getEpochToDatetime($seance->start), 
							'end' => $this->getEpochToDatetime($seance->end), 
							'event' => $event
						)
					);
					break;
				}
			}
		}
		if(count($actual_seance_for_bigpromoblock) === 0) {
			$events =  $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
							->where(function($query) {
								$query->where('status', 'accepted')
								->orWhere('inAccepted', 1);
							})
							->whereNotIn('id', $events_premiers_ids)
							->get();
			$event = $events[rand(0, (count($events) - 1))];
			foreach($event->seances as $seance) {
				if($seance->end >= \Carbon\Carbon::now()->getPreciseTimestamp(3) && $seance->start < \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
					array_push($actual_seance_for_bigpromoblock, array(
							'id' => $event->id, 
							'start' => $this->getEpochToDatetime($seance->start), 
							'end' => $this->getEpochToDatetime($seance->end), 
							'event' => $event
						)
					);
					break;
				}
			}
		}
		return $actual_seance_for_bigpromoblock;
	}
	
	public function getActualEventsWithoutFirst($event_id) {
		$events =  $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
							->where(function($query) {
								$query->where('status', 'accepted')
								->orWhere('inAccepted', 1);
							})
							->where('id', '!=', $event_id)
							->get();
		$cancel = new Cancel;
		$replace = new Replace;
		foreach($events as $key => $event) {
			foreach($event->seances as $seance) {
				if(in_array( $this->getEpochToDatetime($seance->start), $cancel->getCancelsArray() )) {
					$events->forget($key);
				}
				if(array_key_exists( $this->getEpochToDatetime($seance->start), $replace->getReplacesArray() )) {
					$events->forget($key);
				}
				if($seance->start > \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
					$events->forget($key);
				}
			}
		}
		$actual_events = $events->random(2);
		return $actual_events;
	}
	
	public function getEventsForRepertuarWithoutFirsts($array_ids) {
		$events = $this->where(function($query) {
							$query->where('status', 'accepted')
							->orWhere('inAccepted', 1);
						})
						->whereIn('id', $this->array_repertuar)
						->whereNotIn('id', $array_ids)
						->get();
		$actual_events = $events->random(12);
		return $actual_events;
	}
	
	//
	public function getActualSeances() {
		$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
							->where(function($query) {
								$query->where('status', 'accepted')
								->orWhere('inAccepted', 1);
							})
							->get();
		$actual_seances = [];
		foreach($actual_events as $actual_event) {
			$event_id__of_seance = $actual_event->id;
			foreach($actual_event->seances as $key => $seance) {
				if($seance->end >= \Carbon\Carbon::now()->getPreciseTimestamp(3) && $seance->start < \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
					array_push($actual_seances, array('id' => $event_id__of_seance, 'start' => $seance->start, 'end' => $seance->end, 'event' => $actual_event));
				}
			}
		}
		$start = array_column($actual_seances, 'start');
		array_multisort($start, SORT_ASC, $actual_seances);
		foreach($actual_seances as $key => $seance) {
			$actual_seances[$key]['start'] = $this->getEpochToDatetime($seance['start']);
			$actual_seances[$key]['end'] = $this->getEpochToDatetime($seance['end']);
		}
		return $actual_seances;
	}
	
	//
	public function getActualSeancesByCategory($category = null) {
		$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
							->where(function($query) {
								$query->where('status', 'accepted')
								->orWhere('inAccepted', 1);
							})
							->whereJsonContains('category->sysName', $category)
							->get();
		$actual_seances = [];
		foreach($actual_events as $actual_event) {
			$event_id__of_seance = $actual_event->id;
			foreach($actual_event->seances as $key => $seance) {
				if($seance->end >= \Carbon\Carbon::now()->getPreciseTimestamp(3) && $seance->start < \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
					array_push($actual_seances, array('id' => $event_id__of_seance, 'start' => $seance->start, 'end' => $seance->end, 'event' => $actual_event));
				}
			}
		}
		$start = array_column($actual_seances, 'start');
		array_multisort($start, SORT_ASC, $actual_seances);
		foreach($actual_seances as $key => $seance) {
			$actual_seances[$key]['start'] = $this->getEpochToDatetime($seance['start']);
			$actual_seances[$key]['end'] = $this->getEpochToDatetime($seance['end']);
		}
		return $actual_seances;
	}
	
	//
	public function getActualSeancesByTag($tag = null) {
		$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
							->where(function($query) {
								$query->where('status', 'accepted')
								->orWhere('inAccepted', 1);
							})
							//->where('places', 'LIKE', '%"_id":12283%')
							->where('tags', 'LIKE', '%"'.$tag.'"%')
							//->where('tags->"$[*].sysName"', 'klassicheskoe-iskusstvo')
							//->whereRaw("JSON_CONTAINS(sysName, '[klassicheskoe-iskusstvo]' )")
							->get();
		$actual_seances = [];
		foreach($actual_events as $actual_event) {
			$event_id__of_seance = $actual_event->id;
			foreach($actual_event->seances as $key => $seance) {
				if($seance->end >= \Carbon\Carbon::now()->getPreciseTimestamp(3) && $seance->start < \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
					array_push($actual_seances, array('id' => $event_id__of_seance, 'start' => $seance->start, 'end' => $seance->end, 'event' => $actual_event));
				}
			}
		}
		$start = array_column($actual_seances, 'start');
		array_multisort($start, SORT_ASC, $actual_seances);
		foreach($actual_seances as $key => $seance) {
			$actual_seances[$key]['start'] = $this->getEpochToDatetime($seance['start']);
			$actual_seances[$key]['end'] = $this->getEpochToDatetime($seance['end']);
		}
		return $actual_seances;
	}
	
	//
	public function getActualSeancesByPrice($price = 1000000) {
		$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
							->where(function($query) {
								$query->where('status', 'accepted')
								->orWhere('inAccepted', 1);
							})
							->where('price', '<=', $price)
							->get();
		$actual_seances = [];
		foreach($actual_events as $actual_event) {
			$event_id__of_seance = $actual_event->id;
			foreach($actual_event->seances as $key => $seance) {
				if($seance->end >= \Carbon\Carbon::now()->getPreciseTimestamp(3) && $seance->start < \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
					array_push($actual_seances, array('id' => $event_id__of_seance, 'start' => $seance->start, 'end' => $seance->end, 'event' => $actual_event));
				}
			}
		}
		$start = array_column($actual_seances, 'start');
		array_multisort($start, SORT_ASC, $actual_seances);
		foreach($actual_seances as $key => $seance) {
			$actual_seances[$key]['start'] = $this->getEpochToDatetime($seance['start']);
			$actual_seances[$key]['end'] = $this->getEpochToDatetime($seance['end']);
		}
		return $actual_seances;
	}
	
	//
	public function getActualSeancesByVariant($variant = null) {
		if($variant === 'pushcard') {
			$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
								->where(function($query) {
									$query->where('status', 'accepted')
									->orWhere('inAccepted', 1);
								})
								//->where('places', 'LIKE', '%"_id":12283%')
								->where('statusPushka', 'accepted')
								->get();
		}
		else if($variant === 'premiers') {
			$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
								->where(function($query) {
									$query->where('status', 'accepted')
									->orWhere('inAccepted', 1);
								})
								//->where('places', 'LIKE', '%"_id":12283%')
								->whereJsonContains('extraFields->premiere', true)
								->get();
		}
		else if($variant === 'gastroli') {
			$actual_events = $this->where(function($q){
									$q->whereNotNull('organizerPlace')->orWhereNotNull('organizerPerson');
								})
								->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
								->where(function($query) {
									$query->where('status', 'accepted')
									->orWhere('inAccepted', 1);
								})
								->get();
		}
		else if($variant === 'teatr') {
			$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
								->where(function($query) {
									$query->where('status', 'accepted')
									->orWhere('inAccepted', 1);
								})
								->whereNull('organizerPlace')
								->whereNull('organizerPerson')
								->get();
		}
		else {
			$actual_events = null;
		}
		
		$actual_seances = [];
		
		if ($actual_events != null) {
			foreach($actual_events as $actual_event) {
				$event_id__of_seance = $actual_event->id;
				foreach($actual_event->seances as $key => $seance) {
					if($seance->end >= \Carbon\Carbon::now()->getPreciseTimestamp(3) && $seance->start < \Carbon\Carbon::now()->addYears(2)->getPreciseTimestamp(3)) {
						array_push($actual_seances, array('id' => $event_id__of_seance, 'start' => $seance->start, 'end' => $seance->end, 'event' => $actual_event));
					}
				}
			}
			$start = array_column($actual_seances, 'start');
			array_multisort($start, SORT_ASC, $actual_seances);
			foreach($actual_seances as $key => $seance) {
				$actual_seances[$key]['start'] = $this->getEpochToDatetime($seance['start']);
				$actual_seances[$key]['end'] = $this->getEpochToDatetime($seance['end']);
			}
		}
		return $actual_seances;
	}
	
	//
	public function getActualCategories() {
		$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
								->where(function($query) {
									$query->where('status', 'accepted')
									->orWhere('inAccepted', 1);
								})
								->get();
		$actual_categories = [];
		foreach($actual_events as $actual_event) {
			if(!in_array(array('name' => $actual_event->category->name, 'sysName' => $actual_event->category->sysName), $actual_categories)) {
				array_push($actual_categories, array('name' => $actual_event->category->name, 'sysName' => $actual_event->category->sysName)); 
			}
		}
		return $actual_categories;
	}
	
	//
	public function getActualTags() {
		$actual_events = $this->where('end', '>=', \Carbon\Carbon::now()->getPreciseTimestamp(3))
								//->where('places', 'LIKE', '%"_id":12283%')
								->where(function($query) {
									$query->where('status', 'accepted')
									->orWhere('inAccepted', 1);
								})
								->get();
		$actual_tags = [];
		foreach($actual_events as $actual_event) {
			foreach($actual_event->tags as $key => $tag) {
				if(!in_array(array('name' => $tag->name, 'sysName' => $tag->sysName), $actual_tags)) {
					array_push($actual_tags, array('name' => $tag->name, 'sysName' => $tag->sysName)); 
				}
			}
		}
		return $actual_tags;
	}
	
	//
	public function getEventsForRepertuar() {
		$events = $this->where(function($query) {
							$query->where('status', 'accepted')
								->orWhere('status', 'new')
								->orWhere('inAccepted', 1);
						})
						->whereIn('id', $this->array_repertuar)
						->orderBy('start', 'DESC')
						->get();
		return $events;
	}
	
	//
	public function getEventByIdForRepertuar($id) {
		$event = $this->where('id', $id)
						->where(function($query) {
							$query->where('status', 'accepted')
							->orWhere('inAccepted', 1)
							->orWhere('status', 'new');
						})
						->firstOrFail();
		return $event;
	}
	
	//
	public function getEventsForRepertuarByCategory($category) {
		$events = $this->where(function($query) {
							$query->where('status', 'accepted')
							->orWhere('inAccepted', 1);
						})
						->whereIn('id', $this->array_repertuar)
						->whereJsonContains('category->sysName', $category)
						->orderBy('start', 'DESC')
						->get();
		return $events;
	}
	
	//
	public function getEventsForRepertuarByTag($tag) {
		$events = $this->where(function($query) {
							$query->where('status', 'accepted')
							->orWhere('inAccepted', 1);
						})
						->whereIn('id', $this->array_repertuar)
						->where('tags', 'LIKE', '%"'.$tag.'"%')
						->orderBy('start', 'DESC')
						->get();
		return $events;
	}
	
	//
	public function getCategoriesFromEvents($events) {
		$categories = [];
		foreach($events as $event) {
			if(!in_array(array('name' => $event->category->name, 'sysName' => $event->category->sysName), $categories)) {
				array_push($categories, array('name' => $event->category->name, 'sysName' => $event->category->sysName)); 
			}
		}
		return $categories;
	}
	
	//
	public function getTagsFromEvents($events) {
		$tags = [];
		foreach($events as $event) {
			if(isset($event->tags)) {
				foreach($event->tags as $key => $tag) {
					if(!in_array(array('name' => $tag->name, 'sysName' => $tag->sysName), $tags)) {
						array_push($tags, array('name' => $tag->name, 'sysName' => $tag->sysName)); 
					}
				}
			}
		}
		return $tags;
	}
	
}