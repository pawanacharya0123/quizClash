<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Play extends Model
{

    protected $fillable = [
        'user_id', 'question_id', 'category_id', 'level', 'played'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function question() {
        return $this->belongsTo('App\Question');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
