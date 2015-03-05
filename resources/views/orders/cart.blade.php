@extends('app')

@section('content')

    <h1>Your Cart</h1>

    <ul class="list-group">
    @foreach ($movies as $movie)
                <li class="list-group-item">{{ $movie->title }}, {{ $movie->description }} , {{ $movie->price }}  <a href="/filmy/public/orders/remove/{{$movie->id}}">Remove from cart</a></li>
    @endforeach
    </ul>

    <h4>
        <a href="/filmy/public/orders/send">Send current order</a>
    </h4>
    <h4>
        <a href="/filmy/public/movies">Back to movies list</a>
    </h4>
@stop