@extends('layouts.master')
@section('title')
  {{$post->name}} | {{$category->name}}
@endsection
@section('content')
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$post->name}}</h1>
            <span class="color-text-a">Fitness</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Fitness</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('health', $category->key)}}">{{$category->name}}</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{$post->name}}
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="posts-list">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          @php
          $video_id = explode("?v=", $post->video)[1];
          @endphp
          <iframe width="100%" height="350px" src="https://www.youtube.com/embed/{{$video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-sm-8 offset-sm-2">
          <div class="title-box-d mt-5">
            <h4 class="title-d">Description</h4>
          </div>
          {{$post->description}}
          <div class="title-box-d mt-3">
            <h4 class="title-d">Steps</h4>
          </div>
          {{$post->steps}}
          <div class="title-box-d mt-3">
            <h4 class="title-d">Benefits</h4>
          </div>
          {{$post->benefits}}
        </div>
      </div>
    </div>
  </section>
@endsection