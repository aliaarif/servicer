<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
 use SoftDeletes;
 protected $dates = ['deleted_at'];
 protected $table = "quotes";

 public function job()
 {
     return $this->belongsTo('App\Models\Job','job_id');
 }

 public function user()
 {
     return $this->belongsTo('App\Models\User','provider_id');
 }

 public function servicer()
 {
    return $this->belongsTo('App\Models\Servicer','provider_id');
}
}
