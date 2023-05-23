<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Carbon\Carbon;

class Philactivity extends Model
{
	/*
	*
	* id
	* name
	* age
	* image
	* image_list
	* image_poster
	* description
	* city_id
	* is_ya_permanent
	* is_ya_allday
	* is_tour
	* object_version
	* pro_culture_id
	* created_at
	* updated_at
	*
	*/
	
	protected $table = 'philactivities';
	
	protected $primaryKey = 'id';
	
	protected $casts = [
		
	];
	
	protected $fillable = [
		'id',
		'name',
		'age',
		'image',
		'image_list',
		'image_poster',
		'description',
		'city_id',
		'is_ya_permanent',
		'is_ya_allday',
		'is_tour',
		'object_version',
		'pro_culture_id',
	];
	
	public function seances()
	{
		return $this->hasMany(Philseance::class, 'activity_id', 'id');
	}
	
	public function actual_seances()
	{
		$now = Carbon::now()->subMinutes(60);
		return $this->hasMany(Philseance::class, 'activity_id', 'id')->where('date', '>', $now);
	}
	
	public function event()
	{
		return $this->belongsTo(Event::class, 'pro_culture_id', 'id');
	}
	
}
