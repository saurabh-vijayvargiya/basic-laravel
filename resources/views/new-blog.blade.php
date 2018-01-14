@extends('layouts.app')

@section('content')
    <h2>Create new blog post</h2>
    {!! Form::open(['url' => 'blog']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Body'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-success '])}}
    </div>
    {!! Form::close() !!}
@endsection