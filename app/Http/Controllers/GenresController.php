<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Class GenresController
 * @package App\Http\Controllers
 */
class GenresController extends Controller {
	/**
	 * @param $id
	 * @return \Illuminate\View\View
	 */
	public function show($id)
	{
		$genre = Genre::findOrFail($id);
		$movies = $genre->movies()->get();
		return view('genres/show', compact('movies', 'genre'));
	}


}
