<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoryprofile extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'score', 'rank', 'life'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
