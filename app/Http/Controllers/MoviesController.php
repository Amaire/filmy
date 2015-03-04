<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller {

    public function index() {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id) {

        $movie = Movie::findOrFail($id);
//Session::put('selectedMovieID', $id);
        return view('movies.show', compact('movie'));
    }
    

}
