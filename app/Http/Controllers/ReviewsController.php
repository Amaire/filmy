<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

/**
 * Class ReviewsController
 * @package App\Http\Controllers
 */
class ReviewsController extends Controller {
	/**
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
		$id = Session::get('selectedMovieID', 0);
		return view('reviews.create', compact('id'));
	}

}