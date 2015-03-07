<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movie
 * @package App
 */
class Movie extends Model {

    protected $fillable = [
        'title',
        'description',
        'price'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genres() {
        return $this->belongsTo('App\Genre', 'id_genre');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews() {
        return $this->hasMany('App\Review', 'id_movie');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders() {
        return $this->belongsToMany('App\Order', 'movie_order','id_movie','id_order');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function actors() {
        return $this->belongsToMany('App\Actor', 'actor_movie','id_movie','id_actor');
    }

    //
}
