@extends('app')

@section('content')

<h1>{{ $movie->title }}</h1>

<movie>
    {{ $movie->description }}
</movie>
@stop