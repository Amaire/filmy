@extends('app')

@section('content')

<h1>{{ $movie->title }}</h1>

<movie>
    <p> Opis </p>
    {{ $movie->description }}
    
    <p> Cena: {{ $movie->price }} </p>    
</movie>

<p>
  <a href="/filmy/public/movies">"back"</a>
</p>
@stop