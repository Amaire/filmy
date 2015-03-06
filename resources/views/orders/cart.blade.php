@extends('app')

@section('content')

    <h1>Your Cart</h1>

    <ul class="list-group">
    @foreach ($movies as $movie)
                <li class="list-group-item">{{ $movie->title }}, Price:{{ $movie->price }}  <a href="/filmy/public/orders/remove/{{$movie->id}}">Remove from cart</a></li>
    @endforeach
    </ul>

    <h4>
        <a href="/filmy/public/orders/send">Send current order</a>
    </h4>
    <h4>
        <a href="/filmy/public/movies/index">Back to movies list</a>
    </h4>


    <h3>Payment Methods</h3>
    <h4>For your convenience, we offer the following payment methods:</h4>
    <ul class="list-group">
        <li class="list-group-item">Credit cards/Debit cards: American Express, Visa, MasterCard and Discover</li>
        <li class="list-group-item">Other payment methods: Amazon and PayPal.</li>
        <li class="list-group-item">Wire Transfer: Bank wire payments are accepted on all orders.</li>
    </ul>





    </p>
@stop