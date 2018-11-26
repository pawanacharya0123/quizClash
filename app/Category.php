<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category'
    ];

    public function questions() {
        return $this->hasMany('App\Question');
    }

    public function categoryprofiles() {
        return $this->hasMany('App\Categoryprofile');
    }

    public function plays() {
        return $this->hasMany('App\Play');
    }

    public static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->questions()->delete();
            $category->categoryprofiles()->delete();
            $category->plays()->delete();
        });
    }
}
