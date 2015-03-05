<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Session;
use App\Movie;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrdersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//$user = User::findOrFail(Auth::id());
		$orders = Auth::user()->orders()->get();
		return view('orders.index', compact('orders'));

	}
	public function add($id)
	{
		$cart = Session::get('cart', array());
		if(!in_array($id,$cart))
			array_push($cart, $id);
		Session::put('cart', $cart);
		return redirect('/orders/cart');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function remove($id)
	{
		$cart = Session::get('cart', array());
		if(in_array($id,$cart))
			unset($cart[array_search($id,$cart)]);
		Session::put('cart', $cart);
		return redirect('/orders/cart');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function send()
	{
		$cart = Session::get('cart', array());

		$order =Auth::user()->orders()->create(array('date'=>Carbon::now(),'status'=>'In Progress'));
		$order->save();
		$order->movies()->attach($cart);
		Session::put('cart', array());
		return redirect('/orders');
	}

	public function cart()
	{
		$cart = Session::get('cart', array());
		$movies = Movie::whereIn('id',$cart)->get();
		return view('orders.cart', compact('movies'));
	}

	public function orderDetails($id)
	{
		$order = Order::findOrFail($id);
		$movies = $order->movies()->get();
		return view('orders.orderDetails', compact('movies', 'order'));
	}





}
