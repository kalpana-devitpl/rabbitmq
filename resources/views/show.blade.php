@extends('master')
@section('title', 'Blog view')
@section('content')
<div class="container mt-5 pt-3">
    <div class="offset-md-3 col-md-6 offset-col-2">
        <a href="{{route('blog.list')}}">Back</a>
        <h3>
            {{$blog->title}}
        </h3>
        <img src="{{$blog->image}}" alt="">
        <br>
        <p>{{$blog->description}}</p>
    </div>
</div>
@endsection