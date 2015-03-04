<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

    protected $fillable = [
        'title',
        'description',
        'id_user'
    ];

    public function users() {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function movies() {
        return $this->belongsTo('App\Movie', 'id_movie');
    }

    //
}
