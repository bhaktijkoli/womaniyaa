@extends('layouts.master')
@section('title')
  {{$tip->name}} | General Tips
@endsection
@section('content')
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{$tip->name}}</h1>
            <span class="color-text-a">General Tips</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">General Tips</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                {{$tip->name}}
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
        <div class="col-sm-12 col-lg-8 offset-lg-2">
          @php
          $image = "";
          $images = json_decode($tip->images);
          @endphp
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            @foreach ($images as $image)
              <div class="carousel-item-b">
                <img src="{{Voyager::image($image)}}" alt="">
              </div>
            @endforeach
          </div>
          <div class="unescaped">
            {!! $tip->tips !!}
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
