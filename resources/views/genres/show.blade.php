@extends('app')

@section('maincolumn')

       <h2>Genres: {{ $genre->genre }}</h2>
       <h4>
           <a href="/filmy/public/movies/index">Back to movies list</a>
       </h4>


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


