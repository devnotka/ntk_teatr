<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Carbon\Carbon;
use Illuminate\Support\Arr;

class Cancel extends Model
{
	
	protected $primaryKey = 'id';
	
	public function getCancelsArray() {
		
		$cancels = $this->all();
		
		$array = Arr::pluck($cancels, 'datetime');
		
		return $array;
		
	}
	
}