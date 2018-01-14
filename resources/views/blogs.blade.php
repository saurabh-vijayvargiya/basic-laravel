@extends('layouts.app')

@section('content')
    <div class="form-group">
        <a href="new-blog" class="btn btn-primary">Create blog</a>
    </div>
    @foreach($blogs as $blog)
        <ul class="list-group">
            <li class="list-group-item"><a href="blog/{{$blog->id}}">{{$blog->title}}</a></li>
        </ul>
    @endforeach

@endsection