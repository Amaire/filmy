@extends('app')

@section('content')

    <h1>Your Orders</h1>


    @foreach ($orders as $order)

        <article>
            <h2>
                <a href="/filmy/public/orders/{{ $order->id }}">Order No.:{{ $order->id }}</a>

            </h2>

            <div class="Date">{{ $order->date }}</div>
            <div class="Status">{{ $order->status }}</div>
        </article>

    @endforeach

@stop