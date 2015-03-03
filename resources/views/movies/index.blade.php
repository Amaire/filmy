@extends('app')

@section('content')

<h1>Movies</h1>


    @foreach ($movies as $movie)
    
    <movie>
        <h2>{{ $movie->title }} </h2>
        
        <div class="body">{{ $movie->body }}</div>
    </movie>
    
    @endforeach
    
@stop