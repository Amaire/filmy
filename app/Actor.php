<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actor
 * @package App
 */
class Actor extends Model {
    protected $primaryKey = "id";
    protected $fillable = [

        'age',
        'name',
        'surname'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function movies() {
        return $this->belongsToMany('App\Movie', 'id_movie');
    }

    //
}
