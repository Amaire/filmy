<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Requests;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller {

    public function index() {
        $movies = Movie::all();
        $ids = DB::table('movies')->
        join('movie_order','movie_order.id_movie','=','movies.id')->
        select('movies.id',DB::raw('count(*) as total'))->
        groupBy('movies.id')->
        orderBy('total','desc')->
        take(5)->get();
        $ids=json_decode(json_encode($ids),true);
        $ids= array_map(function($val){ return $val['id'];},$ids);
        $moviesOrders = Movie::whereIn('id',$ids)->get();

        $ids = DB::table('movies')->
        join('reviews','reviews.id_movie','=','movies.id')->
        select('movies.id',DB::raw('count(*) as total'))->
        groupBy('movies.id')->
        orderBy('total','desc')->
        take(5)->get();
        $ids=json_decode(json_encode($ids),true);
        $ids= array_map(function($val){ return $val['id'];},$ids);
        $moviesReviews = Movie::whereIn('id',$ids)->get();

        $genres = Genre::all();
        return view('movies.index', compact('movies', 'moviesOrders', 'moviesReviews', 'genres'));


    }

    public function show($id) {

        $movie = Movie::findOrFail($id);
        $reviews = $movie->reviews()->latest('created_at')->get();
        Session::put('selectedMovieID', $id);
        $message = null;
        $actors = $movie->actors()->get();
        return view('movies.show', compact('movie', 'actors', 'reviews', 'message'));
    }

    public function showCreateReview(Request $input, $id)
    {
        $movie = Movie::findOrFail($id);
        Session::put('selectedMovieID', $id);
        $reviews = $movie->reviews()->latest('created_at')->get();
        $movie->reviews()->create($input->all());
        $message = 'Review was added to database';
        $actors = $movie->actors()->get();
        return view('movies.show', compact('movie', 'actors', 'reviews', 'message'));
    }

    public function watch($id) {

        $movie = Movie::findOrFail($id);
        $reviews = $movie->reviews()->latest('created_at')->get();
        Session::put('selectedMovieID', $id);
        $message = '';
        $actors = $movie->actors()->get();
        return view('movies.watch', compact('movie', 'actors', 'reviews', 'message'));
    }

}
