<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


use App\Models\Servicer;

class Category extends Model
{
 use SoftDeletes;
 protected $dates = ['deleted_at'];

 public function parent()
 {
  return $this->belongsTo('App\Models\Category', 'parent_id');
}

public function children()
{
  return $this->hasMany('App\Models\Category', 'parent_id');
}

public function jobs(){
 return $this->belongsToMany('App\Models\Job');
}

public function servicers()
{
  return $this->belongsToMany('App\Models\Servicer','category_user','user_id','category_id');
}

}