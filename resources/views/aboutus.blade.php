@extends('layouts.master')
@section('title')
  About us | Woomaniya
@endsection
@section('content')
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Abut Us</h1>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                About Us
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-2">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <img src="{{asset('/img/aboutus1.jpg')}}" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="{{asset('/img/aboutus2.jpg')}}" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="{{asset('/img/aboutus3.jpg')}}" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="{{asset('/img/aboutus4.jpg')}}" alt="">
            </div>
            <div class="carousel-item-b">
              <img src="{{asset('/img/aboutus5.jpg')}}" alt="">
            </div>
          </div>
          <blockquote class="blockquote text-center">
            A Healthy Body holds a Healthy Soul and Mind</blockquote>
          </div>
          <div class="col-sm-12" style="margin-top:20px">
            <div class="title-box-d">
              <h3 class="title-d">Welcome to Womaniyaa</h3>
            </div>
            <p>
              Womaniyaa is a platform where you get information about various diseases with their home remedies. This platform is also about various recipes, exercises and yoga asanas. One can know about various diseases which only can be seen in women. This website provides exercises and yoga asanas which can be done at home or in house gyms. We also have an interactive chatbot which provides a diet plan and diagnoses a disease according to the symptoms.
            </p>
          </div>
        </div>
      </div>
    </section>
  @endsection
