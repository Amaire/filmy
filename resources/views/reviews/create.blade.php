@extends('app')

@section('content')
    <div class='reviewForm'>
<h1>Write a New Reviews</h1>
<hr/>

        {!! Form::open(['url' => 'movies/'.$id]) !!}
        {!! Form::hidden('id_user', Auth::id()) !!}
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
       {!! Form::submit('Add Review', ['class' => 'btn btn-primary form-control']) !!}
</div>
{!! Form::close() !!}
    </div>
@stop
