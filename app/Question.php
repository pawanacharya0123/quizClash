<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'question', 'ans1', 'ans2', 'ans3', 'correct', 'difficulty'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'correct'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function plays() {
        return $this->hasMany('App\Play');
    }
}
