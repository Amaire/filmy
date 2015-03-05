@extends('app')

@section('content')

<h1>Movies</h1>


@foreach ($movies as $movie)

    <article>
    <h2>
        <a href="/filmy/public/movies/{{ $movie->id }}">{{ $movie->title }}</a>

    </h2>

    <div class="description">{{ $movie->description }}</div>

    </article>

@endforeach

@stop