<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    protected $primaryKey = "id";

    protected $fillable = [
        'date',
        'status'
    ];


    public function users() {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function movies() {
        return $this->belongsToMany('App\Movie','movie_order' ,'id_order','id_movie');
    }

    //
}
