<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{ 
	use SoftDeletes;
	protected $dates = ['deleted_at'];
	public function cities()
	{
		return $this->hasMany('App\Models\City','region_id');
	}
}
