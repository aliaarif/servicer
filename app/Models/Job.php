<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  use SoftDeletes;
  protected $table = "jobs";
  protected $dates = ['deleted_at'];
  public function categories()
  {
    return $this->belongsToMany('App\Models\Category','category_job','job_id','category_id');
  }
  public function user()
  {
    return $this->belongsTo("App\Models\User","user_id");
  }

  public function quotes()
  {
    return $this->hasMany('App\Models\Quote');
  }
}
