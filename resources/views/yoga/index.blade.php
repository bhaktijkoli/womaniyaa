@extends('layouts.master')
@section('title')
  {{$category->name}} | Yoga
@endsection
@section('content')
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$category->name}}</h1>
            <span class="color-text-a">Yoga</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Yoga</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{$category->name}}
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
        <div class="col-sm-12">
          @foreach ($posts as $post)
            @php
            $video_id = '';
            $video = explode("?v=", $post->video);
            if(count($video) > 1) {
              $video_id = $video[1];
            }
            @endphp
            <div class="row mb-5 foo">
              <div class="col-sm-6">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-sm-6">
                <div class="title-box-d">
                  <h3 class="title-d">{{$post->name}}</h3>
                </div>
                <p class="content-d color-text-a">{{Str::limit(strip_tags($post->description), 200)}}</p>
                <a href="{{route('fitness.show', ['key' => $category->key, 'slug' => $post->slug])}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
@endsection
