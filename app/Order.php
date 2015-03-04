<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    public function users() {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function movies() {
        return $this->belongsToMany('App\Movie', 'id_movie');
    }

    //
}
