<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReviewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    	public function index()
	{
            $reviews = Rewiev::all();
		return view('revievs.index', compact('reviews'));
	}
	public function create()
	{

		return view('reviews.create');
	}

}