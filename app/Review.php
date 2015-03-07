<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * @package App
 */
class Review extends Model {
    protected $primaryKey = "id";
    protected $fillable = [
        'title',
        'description',
        'id_user'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users() {
        return $this->belongsTo('App\User', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function movies() {
        return $this->belongsTo('App\Movie', 'id_movie');
    }

    //
}
