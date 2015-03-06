@extends('app')

@section('maincolumn')

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

    <h3>Most Popular Movies</h3>
    <hr>

    <h4>By orders</h4>
    @foreach ($moviesOrders as $movie)

        <article>
            <h5>
                <a href="/filmy/public/movies/{{ $movie->id }}">{{ $movie->title }}</a>
            </h5>


        </article>

    @endforeach
    <hr>

    <h4>By reviews</h4>

    @foreach ($moviesReviews as $movie)

        <article>
            <h5>
                <a href="/filmy/public/movies/{{ $movie->id }}">{{ $movie->title }}</a>
            </h5>


        </article>

    @endforeach

    @stop