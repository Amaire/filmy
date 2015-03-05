<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('movies', 'MoviesController@index');

Route::get('movies/{id}', 'MoviesController@show');

Route::post('movies/{id}', 'MoviesController@showCreateReview');

Route::get('reviews/create', array('middleware' => 'auth', 'uses'=>'ReviewsController@create'));

Route::get('orders', 'OrdersController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
