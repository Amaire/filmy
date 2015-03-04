<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

    protected $fillable = [
        'title',
        'description',
        'price'
    ];

    public function genres() {
        return $this->belongsTo('App\Genre', 'id_genre');
    }

    public function reviews() {
        return $this->hasMany('App\Review', 'id_movie');
    }

    public function orders() {
        return $this->belongsToMany('App\Order', 'id_order');
    }

    public function actors() {
        return $this->belongsToMany('App\Actor', 'id_actor');
    }

    //
}
