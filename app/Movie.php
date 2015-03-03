<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {
    protected $fillable = [
      'title',
      'description',
      'price'
        
    ];
    
        public function genres() {
        return $this->belongsTo('App\Genre');
    }
        public function reviews() {
        return $this->hasMany('App\Review');
    }
            public function orders() {
        return $this->belongsToMany('App\Order');
    }
            public function actors() {
        return $this->belongsToMany('App\Actor');
    }
	//

}
