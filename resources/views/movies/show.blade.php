@extends('app')

@section('maincolumn')
    @if(! is_null($message))
        <h3>{{$message}}</h3>
    @endif

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
@foreach ($reviews as $review)

    <article>
        <h2>{{ $review->title }} </h2>

        <div class="description">{{ $review->description }}</div>
        <div class="Created">{{ $review->created_at }}</div>
    </article>
@endforeach


@stop