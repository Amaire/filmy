
<article>
    <h2>
        Order No.:{{ $order->id }}
    </h2>

    <div class="Date">{{ $order->date }}</div>
    <div class="Status">{{ $order->status }}</div>
</article>

<ul class="list-group">
    @foreach ($movies as $movie)
        <li class="list-group-item">{{ $movie->title }}</li>
    @endforeach
</ul>

<h3>Payment Methods</h3>
<h4>For your convenience, we offer the following payment methods:</h4>
<ul class="list-group">
    <li class="list-group-item">Credit cards/Debit cards: American Express, Visa, MasterCard and Discover</li>
    <li class="list-group-item">Other payment methods: Amazon and PayPal.</li>
    <li class="list-group-item">Wire Transfer: Bank wire payments are accepted on all orders.</li>
</ul>