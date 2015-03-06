@extends('app')

@section('content')

<h1>Movies</h1>


@foreach ($movies as $movie)



    <article>
    <h3>
        <a href="/filmy/public/movies/{{ $movie->id }}"><img src="/filmy/public/covers/{{ $movie->id }}.jpg" height="200"></a>
        <a href="/filmy/public/movies/{{ $movie->id }}">{{ $movie->title }}</a>
    </h3>



    <div class="description">{{ $movie->description }}</div>

    </article>

@endforeach

@stop

@section('sidebar')



    @stop