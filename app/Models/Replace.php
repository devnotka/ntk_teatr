<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Carbon\Carbon;

class Replace extends Model
{
	
	protected $primaryKey = 'id';
	
	protected $dates = [
		'datetime'
	];
	
	public function getReplacesArray() {
		
		$array = [];
		
		$now = \Carbon\Carbon::now()->setTimezone('Europe/Moscow')->subMinutes(90);
		$replaces = $this->get();
		
		foreach($replaces as $replace) {
			if($replace->datetime->gt($now)) {
				$datetime = (new Carbon($replace->datetime))->setTimezone('Europe/Moscow')->translatedFormat('j F H:i l');
				$array[$datetime] = [
					'from' => $replace->from,
					'to' => $replace->to,
					//'datetime' => $replace->datetime,
					//'now' => $now,
					//'gt' => $replace->datetime->gt($now)
				];
			}
		};
		
		return $array;
		
	}
	
}