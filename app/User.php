<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    //each user has a profile

    public function profile() {
        return $this->hasOne('App\Profile');
    }

    public function categoryprofiles() {
        return $this->hasMany('App\Categoryprofile');
    }

    public function plays() {
        return $this->hasMany('App\Play');
    }



    public static function boot() {
        parent::boot();

        static::deleting(function($user) {
            $user->profile()->delete();
            $user->categoryprofiles()->delete();
            $user->plays()->delete();
        });
    }
}
