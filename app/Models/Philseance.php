<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class Philseance extends Model
{
	/*
	* id
	* name
	* venue_id
	* version_id
	* venue
	* version
	* date
	* activity_id
	* widget
	* min_price
	* max_price
	* genres_id
	* age
	* image
	* image_list
	* image_poster
	* city_id
	* close_to
	* organizer_id
	* object_version
	* created_at
	* updated_at
	*/
	
	protected $primaryKey = 'aiid';
	
	protected $fillable = [
		'id',
		'name',
		'venue_id',
		'version_id',
		'venue',
		'version',
		'date',
		'activity_id',
		'widget',
		'min_price',
		'max_price',
		'genres_id',
		'age',
		'image',
		'image_list',
		'image_poster',
		'city_id',
		'close_to',
		'organizer_id',
		'object_version',
		'is_cancel'
	];
	
	protected $casts = [
		'genres_id' => 'array',
	];
	
	protected $appends = [
		'datechange',
		'replace',
	];
	
	public function activity()
	{
		return $this->belongsTo(Philactivity::class, 'activity_id', 'id')->orderBy('created_at', 'desc');
	}
	
	/*public function getReplaceAttribute()
	{
		$replace = null;
		
		if($this->is_cancel === 0) {
			if($before_seance = Seance::where('id', $this->id)->where('aiid', '!=', $this->aiid)->orderBy('aiid', 'desc')->first())
			{
				$replace = $before_seance->id;
			}
		}
		
		return $replace;
	}
	
	public function getDatechangeAttribute()
	{
		$datechange = null;
		
		if(count($dubles = Seance::where('id', $this->id)->orderBy('aiid', 'desc')->get()) > 1)
		{
			if($dubles[0]->activity_id === $dubles[1]->activity_id)
			{
				$datechange = $dubles[1]->date;
			}
		}
		
		return $datechange;
	}*/
	
	public function getHumanDate($date)
	{	
		return Carbon::parse($date)->translatedFormat('j F H:i, l');
	}
	
	public function getHumanDateForReplace($date)
	{	
		return Carbon::parse($date)->translatedFormat('j F H:i');
	}
	
	public function getHumanDateForBadge($date)
	{
		$pdate = Carbon::parse($date);
		
		$day = $pdate->translatedFormat('j');
		$month = explode(' ', $pdate->translatedFormat('j F'));
		$hours_and_minutes = $pdate->translatedFormat('H:i');
		$weekday = $pdate->translatedFormat('l');
		
		$date_badge = '<div class="px-4 pb-1 bg-gray-700 opacity-80"><span class="text-2xl font-bold">'.$day.'</span><br/>'.$month[1].'<br/>'.$hours_and_minutes.'</div><div class="p-1 text-xs text-gray-100 bg-pink-700 rounded-b">'.$weekday.'</div>';
		
		return $date_badge;
	}
	
	public function getHumanDateForEventRow($date)
	{
		$pdate = Carbon::parse($date);
		
		$day = $pdate->translatedFormat('j');
		$month = explode(' ', $pdate->translatedFormat('j F'));
		$hours_and_minutes = $pdate->translatedFormat('H:i');
		$weekday = $pdate->translatedFormat('l');
		
		$date_badge = '<div class="uppercase"><span class="text-2xl font-bold">'.$day.'</span> '.$month[1].' в <span class="font-bold">'.$hours_and_minutes.'</span>, '.$weekday.'</div>';
		
		return $date_badge;
	}
	
	public function getEventBySeanceId($seance_id)
	{
		return $this->where('id', $seance_id)->first();
	}
	
	//
	public function getActualSeances()
	{
		$now = Carbon::now()->subMinutes(60);
		
		$actual_seances = $this->where('date', '>', $now)->orderBy('aiid', 'desc')->get();
		
		foreach($actual_seances as $key => $seance) {
			if($seance->is_cancel === 1) {
				// virtual attr 'replace' - (замена сеанса)
				if($replace_seance = $actual_seances->where('date', $seance->date)->where('is_cancel', 0)->first()) {
					$actual_seances->where('aiid', $replace_seance->aiid)->first()->replace = $seance->id;
					$actual_seances->where('aiid', $seance->aiid)->first()->replace = $replace_seance->id;
				}
			} else {
				// virtual attr 'datechange' - (перенос сеанса)
				if(count($dubles = $actual_seances->where('id', $seance->id)->pluck('date')) > 1) {
					$actual_seances[$key]->datechange = $dubles[1];
				}
			}
		}
		
		// removing all active seance states - (остаются только прошлые ненужные состояния записей)
		$duplicates_seances = clone $actual_seances;
		$plucked = $actual_seances->pluck('id')->unique();
		foreach($plucked as $key => $seance_id) { 
			if($duplicates_seances->find('id', $seance_id)) {
				$duplicates_seances->forget($key);
			}
		}
		
		//dd($duplicates_seances->aiid);
		$actual_seances = $actual_seances->diff($duplicates_seances);
		
		foreach($actual_seances as $key => $actual_seance)
		{
			if($actual_seance->activity->pro_culture_id === 0)
			{
				$actual_seances->forget($key);
			}
		}
		
		return $actual_seances->sortBy('date');
	}
	
	public function getActualSeancesByActivityId($activity_id)
	{
		$now = Carbon::now()->subMinutes(60);
		
		$actual_seances = $this->where('date', '>', $now)->where('activity_id', $activity_id)->orderBy('aiid', 'desc')->get();
		
		foreach($actual_seances as $key => $seance) {
			if($seance->is_cancel === 1) {
				// virtual attr 'replace' - (замена сеанса)
				if($replace_seance = $actual_seances->where('date', $seance->date)->where('is_cancel', 0)->first()) {
					$actual_seances->where('aiid', $replace_seance->aiid)->first()->replace = $seance->id;
					$actual_seances->where('aiid', $seance->aiid)->first()->replace = $replace_seance->id;
				}
			} else {
				// virtual attr 'datechange' - (перенос сеанса)
				if(count($dubles = $actual_seances->where('id', $seance->id)->pluck('date')) > 1) {
					$actual_seances[$key]->datechange = $dubles[1];
				}
			}
		}
		
		// removing all active seance states - (остаются только прошлые ненужные состояния записей)
		$duplicates_seances = clone $actual_seances;
		$plucked = $actual_seances->pluck('id')->unique();
		foreach($plucked as $key => $seance_id) { 
			if($duplicates_seances->find('id', $seance_id)) {
				$duplicates_seances->forget($key);
			}
		}
		
		//dd($duplicates_seances->aiid);
		$actual_seances = $actual_seances->diff($duplicates_seances);
		
		foreach($actual_seances as $key => $actual_seance)
		{
			if($actual_seance->activity->pro_culture_id === 0)
			{
				$actual_seances->forget($key);
			}
		}
		
		return $actual_seances->sortBy('date');
	}
	
	public function getActualSeancesForPromo()
	{
		$actual_seances = $this->getActualSeances();
		
		foreach($actual_seances as $key => $actual_seance)
		{
			if($actual_seance->activity->pro_culture_id === 0 || $actual_seance->datechange || $actual_seance->replace)
			{
				$actual_seances->forget($key);
			}
		}
		
		return $actual_seances->shuffle();
		
	}
	
	public function getActualCategories()
	{
		$actual_seances = $this->getActualSeances();
		
		$actual_categories = [];
		
		foreach($actual_seances as $actual_seance) 
		{
			if($actual_seance->activity->pro_culture_id != 0)
			{
				if(!in_array(array('name' => $actual_seance->activity->event->category->name, 'sysName' => $actual_seance->activity->event->category->sysName), $actual_categories)) 
				{
					array_push($actual_categories, array('name' => $actual_seance->activity->event->category->name, 'sysName' => $actual_seance->activity->event->category->sysName)); 
				}
			}
		}
		
		return $actual_categories;
	}
	
	public function getActualTags()
	{
		$actual_seances = $this->getActualSeances();
		
		$actual_tags = [];
		
		foreach($actual_seances as $actual_seance) 
		{
			if($actual_seance->activity->pro_culture_id != 0)
			{
				if($actual_seance->activity->event->tags) 
				{
					foreach($actual_seance->activity->event->tags as $key => $tag) 
					{
						if(!in_array(array('name' => $tag->name, 'sysName' => $tag->sysName), $actual_tags)) 
						{
							array_push($actual_tags, array('name' => $tag->name, 'sysName' => $tag->sysName)); 
						}
					}
				}
			}
		}
		
		return $actual_tags;
	}
	
	public function getActualSeancesByCategory($category = null)
	{
		$actual_seances = $this->getActualSeances();
		
		$ids = [];
		
		foreach($actual_seances as $actual_seance) 
		{
			if($actual_seance->activity->event->category->sysName === $category)
			{
				array_push($ids, $actual_seance->aiid);
			}
		}
		
		return $actual_seances->only($ids);
	}
	
	public function getActualSeancesByTag($searchtag = null)
	{
		$actual_seances = $this->getActualSeances();
		
		$ids = [];
		
		foreach($actual_seances as $actual_seance) 
		{
			if($actual_seance->activity->event->tags) 
			{
				foreach($actual_seance->activity->event->tags as $key => $tag) 
				{
					if($tag->sysName === $searchtag)
					{
						array_push($ids, $actual_seance->aiid);
					}
				}
			}
		}
		
		return $actual_seances->only($ids);
	}
	
	public function getActualSeancesByPrice($price = 1000000)
	{
		$actual_seances = $this->getActualSeances();
		
		$ids = [];
		
		foreach($actual_seances as $actual_seance) 
		{
			if($actual_seance->min_price < $price)
			{
				array_push($ids, $actual_seance->aiid);
			}
		}
		
		return $actual_seances->only($ids);
	}
	
	public function getActualSeancesByVariant($variant)
	{
		$actual_seances = $this->getActualSeances();
		
		$ids = [];
		
		foreach($actual_seances as $actual_seance) 
		{
			if($variant === 'pushcard')
			{
				if($actual_seance->activity->event->statusPushka === 'accepted'  && $actual_seance->activity->event->id != 1767846)
				{
					array_push($ids, $actual_seance->aiid);
				}
			}
			if($variant === 'premiers')
			{
				if(isset($actual_seance->activity->event->extraFields))
				{
					if(isset($actual_seance->activity->event->extraFields->premiere))
					{
						if($actual_seance->activity->event->extraFields->premiere === true)
						{
							array_push($ids, $actual_seance->aiid);
						}
					}
				}
			}
			if($variant === 'gastroli')
			{
				if(isset($actual_seance->activity->event->organizerPlace) || isset($actual_seance->activity->event->organizerPerson))
				{
					array_push($ids, $actual_seance->aiid);
				}
			}
			if($variant === 'teatr')
			{
				if(!$actual_seance->activity->event->organizerPlace && !$actual_seance->activity->event->organizerPerson)
				{
					array_push($ids, $actual_seance->aiid);
				}
			}
		}
		
		return $actual_seances->only($ids);
	}
	
}
