<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 * @package App
 */
class Genre extends Model {
    protected $primaryKey = "id";
    protected $fillable = [
        'genre'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movies() {
        return $this->hasMany('App\Movie', 'id_genre');
    }

    //
}
