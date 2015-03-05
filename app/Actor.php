<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model {
    protected $primaryKey = "id";
    protected $fillable = [

        'age',
        'name',
        'surname'
    ];

    public function movies() {
        return $this->belongsToMany('App\Movie', 'id_movie');
    }

    //
}
