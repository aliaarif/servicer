<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Notifications\UserServicerResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Servicer extends Authenticatable
{
 use SoftDeletes;
 use Notifiable;
 
 protected $dates = ['deleted_at'];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'first_name', 'last_name', 'email', 'password', 'user_type_id'
   ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserServicerResetPasswordNotification($token));
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','category_user','user_id','category_id');
    }

    public function cities()
    {
        return $this->belongsToMany('App\Models\City','city_user','user_id','city_id');
    }
}
