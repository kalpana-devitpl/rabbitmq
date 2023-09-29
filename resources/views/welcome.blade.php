@extends('master')
@section('title', 'Blog List')
@section('content')
<div class="row">
    <nav class="navbar navbar-expand-sm bg-primary text-white fixed-top">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-white" href="#">LOGO</a>
            </li>
          </ul>
        </div>
    </nav>
</div>
<div class="container mt-5 pt-5">
    <div class="row">

        @foreach ($blogs as $blog)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>
                        {{$blog->title}}
                    </h4>
                </div>
                <div class="card-body">
                    <img src="{{$blog->image}}" alt="" width="380" height="200">
                </div>
                <div class="card-footer bg-primary text-center">
                    <a href="{{route('blog.view',$blog->id)}}" class="btn text-white btn-block">View</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@endsection