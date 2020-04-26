@extends('layouts.master')
@section('title')
  Welcome to Womaniyaa
@endsection
@section('content')
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">General Tips</h2>
            </div>
            <div class="title-link">
              <a href="{{route('home')}}">Read More
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        @foreach (App\GeneralTip::all() as $tip)
          @php
            $image = "";
            $images = json_decode($tip->images);
            if(count($images)) {
              $image = $images[0];
            }
          @endphp
          <div class="carousel-item-c">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{Voyager::image($image)}}" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="{{route('tip.show', $tip->slug)}}" class="category-b">{{$tip->name}}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
