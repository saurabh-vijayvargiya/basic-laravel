@extends('layouts.app')

@section('content')
    <ul class="list-group">
        <li class="list-group-item">{{$blog->title}}</li>
        <li class="list-group-item">{{$blog->body}}</li>
    </ul>
    <a href="/blog">Back</a>
@endsection