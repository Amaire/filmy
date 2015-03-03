<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

    protected $fillable = [
        'title',
        'description'
    ];

    public function users() {
        return $this->belongsTo('App\User');
    }

    public function movies() {
        return $this->belongsTo('App\Movie');
    }

    //
}
