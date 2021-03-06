<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HospitalProfile extends Model
{
	public static function find($id, $field = null){
		if($field){
			return self::where($field, '=', $id)->firstOrFail();
		}
		return self::where('id', '=', $id)->firstOrFail();
	}
	
	public function Hospital(){
		return $this->belongsTo(Hospital::class);
	}
}
