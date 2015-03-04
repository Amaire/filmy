<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MoviesController extends Controller {

    public function index() {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function show($id) {

        $movie = Movie::findOrFail($id);
        $reviews = $movie->reviews()->latest('created_at')->get();
        Session::put('selectedMovieID', $id);
        $message = null;
        return view('movies.show', compact('movie', 'reviews', 'message'));
    }

    public function showCreateReview(Request $input, $id)
    {
        $movie = Movie::findOrFail($id);
        Session::put('selectedMovieID', $id);
        $reviews = $movie->reviews()->latest('created_at')->get();
        $movie->reviews()->create($input->all());
        $message = 'Review was added to database';

        return view('movies.show', compact('movie', 'reviews', 'message'));
    }

}
