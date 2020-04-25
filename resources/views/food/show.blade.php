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
            <span class="color-text-a">Food</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Food</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('food', $category->key)}}">{{$category->name}}</a>
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
          <div class="card-box-a">
            <div class="img-box-a">
              <img src="{{Voyager::image($post->image)}}" alt="" class="img-a img-fluid">
            </div>
          </div>
        </div>
        <div class="col-sm-8 offset-sm-2">
          <div class="title-box-d mt-5">
            <h4 class="title-d">Description</h4>
          </div>
          {{$post->description}}
          <div class="title-box-d mt-3">
            <h4 class="title-d">Requirements</h4>
          </div>
          {{$post->requirements}}
          <div class="title-box-d mt-3">
            <h4 class="title-d">Methods</h4>
          </div>
          {{$post->methods}}
          <div class="title-box-d mt-3">
            <h4 class="title-d">Special Precautions</h4>
          </div>
          {{$post->precautions}}
        </div>
      </div>
    </div>
  </section>
@endsection