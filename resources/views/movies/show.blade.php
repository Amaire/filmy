@extends('app')

@section('maincolumn')
    @if(! is_null($message))
        <h3>{{$message}}</h3>
    @endif

<h2><img src="/filmy/public/covers/{{ $movie->id }}.jpg" height="200"> {{ $movie->title }} </h2>

    <h3>Actors</h3>
    <ul class="list-group">
        @foreach($actors as $actor)

        <li class="list-group-item">{{ $actor->name }} {{ $actor->surname }}</li>

        @endforeach
    </ul>

<article>
    <h3> Description </h3>
    {{ $movie->description }}

   <h4> Price: {{ $movie->price }} </h4>
</article>

<h4>
    <a href="/filmy/public/movies/index">Back to movies list</a>
</h4>


@stop
@section('sidebar')
    <a href="/filmy/public/orders/add/{{$movie->id}}"><img src="/filmy/public/img/cart.png" height="30"/>Add to cart</a>
<h2>Reviews</h2>
<a href="/filmy/public/reviews/create"><img src="/filmy/public/img/review.png" height="30"/> Add new review</a>
@foreach ($reviews as $review)

    <article>
        <h2>{{ $review->title }} </h2>

        <div class="description">{{ $review->description }}</div>
        <div class="Created">{{ $review->created_at }}</div>
    </article>
@endforeach


@stop