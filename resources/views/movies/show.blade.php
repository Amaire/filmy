@extends('app')

@section('maincolumn')

<h2>{{ $movie->title }}</h2>

<movie>
    <p> Opis </p>
    {{ $movie->description }}

    <p> Cena: {{ $movie->price }} </p>    
</movie>

<p>
    <a href="/filmy/public/movies">"back"</a>
</p>
@stop
@section('sidebar')
<h2>Reviews</h2>
<a href="/filmy/public/reviews/create">Add new review</a>

@stop