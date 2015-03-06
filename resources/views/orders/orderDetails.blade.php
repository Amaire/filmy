@extends('app')

@section('content')

    <h1>Your Order No.: {{$order->id}}</h1>

    <ul class="list-group">
    @foreach ($movies as $movie)
                <li class="list-group-item">{{ $movie->title }}, {{ $movie->description }}  <a href="/filmy/public/movies/watch/{{$movie->id}}">Watch a movie</a></li>
    @endforeach
    </ul>
    <h4>
        <a href="/filmy/public/movies/index">Back to movies list</a>
    </h4>
@stop