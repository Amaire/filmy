<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class ReviewsController extends Controller {

	public function create()
	{
		$id = Session::get('selectedMovieID', 0);
		return view('reviews.create', compact('id'));
	}

}