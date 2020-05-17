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
  <section class="section-thoughts section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Thoughts</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
            <div class="carousel-item-b">
              <div class="testimonial-ico" style="margin-top:20px">
                <span class="ion-ios-quote"></span>
              </div>
              <blockquote class="blockquote" style="text-align: center; background: #f3f3f3; padding: 20px; border-radius: 8px; font-style: italic; margin-top: 10px; min-height:80px">
                Don't let sickness, depression, and disease THUG YOU OUT. Eat healthier, think healthier, speak healthier, and more positively over your life. When you do so, you will soon begin to conquer your life and your health through new found empowerment- mind, body, and spirit.
              </blockquote>            </div>
              <div class="carousel-item-b">
                <div class="testimonial-ico" style="margin-top:20px">
                  <span class="ion-ios-quote"></span>
                </div>
                <blockquote class="blockquote" style="text-align: center; background: #f3f3f3; padding: 20px; border-radius: 8px; font-style: italic; margin-top: 10px; min-height:80px">
                  Your body is a Temple. You are what you eat. Do not eat processed food, junk foods, filth, or disease carrying food, animals, or rodents.
                </blockquote>            </div>
                <div class="carousel-item-b">
                  <div class="testimonial-ico" style="margin-top:20px">
                    <span class="ion-ios-quote"></span>
                  </div>
                  <blockquote class="blockquote" style="text-align: center; background: #f3f3f3; padding: 20px; border-radius: 8px; font-style: italic; margin-top: 10px; min-height:80px">
                    What seems impossible today will one day become your warm-up. The PAIN you today will be the STRENGTH you need tomorrow
                  </blockquote>
                </div>
                <div class="carousel-item-b">
                  <div class="testimonial-ico" style="margin-top:20px">
                    <span class="ion-ios-quote"></span>
                  </div>
                  <blockquote class="blockquote" style="text-align: center; background: #f3f3f3; padding: 20px; border-radius: 8px; font-style: italic; margin-top: 10px; min-height:80px">
                    Yoga is the journey of the self, through the self, to the self.
                  </blockquote>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-recommended section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Recommended</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="margin-bottom:50px">
          @php
          $post = App\Health::join('votes', 'votes.votable_id', 'healths.id')->where('votes.votable_type', 'App\Health')->first();
          if(!$post) {
            $post = App\Health::first();
          }
          @endphp
          <div class="col-sm-6">
            <div class="card-box-a">
              <div class="img-box-a">
                <img src="{{Voyager::image($post->image)}}" alt="" class="img-a img-fluid">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="title-box-d">
              <h3 class="title-d">{{$post->name}}</h3>
            </div>
            <p class="content-d color-text-a">{{Str::limit(strip_tags($post->description), 200)}}</p>
            <a href="{{route('health.show', ['key' => $post->category->key, 'slug' => $post->slug])}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row" style="margin-bottom:50px">
          @php
          $post = App\Food::join('votes', 'votes.votable_id', 'foods.id')->where('votes.votable_type', 'App\Food')->first();
          if(!$post) {
            $post = App\Food::first();
          }
          $video_id = '';
          $video = explode("?v=", $post->video);
          if(count($video) > 1) {
            $video_id = $video[1];
          }
          @endphp
          <div class="col-sm-6">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-sm-6">
            <div class="title-box-d">
              <h3 class="title-d">{{$post->name}}</h3>
            </div>
            <p class="content-d color-text-a">{{Str::limit(strip_tags($post->food_groups), 200)}}</p>
            <a href="{{route('food.show', ['key' => $post->category->key, 'slug' => $post->slug])}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="row" style="margin-bottom:50px">
          @php
          $post = App\Fitness::join('votes', 'votes.votable_id', 'fitnesses.id')->where('votes.votable_type', 'App\Fitness')->first();
          if(!$post) {
            $post = App\Fitness::first();
          }
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
              <a href="{{route('fitness.show', ['key' => $post->category->key, 'slug' => $post->slug])}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="row" style="margin-bottom:50px">
          @php
          $post = App\Yoga::join('votes', 'votes.votable_id', 'yogas.id')->where('votes.votable_type', 'App\Yoga')->first();
          if(!$post) {
            $post = App\Yoga::first();
          }
          $video_id = '';
          $video = explode("?v=", $post->video);
          if(count($video) > 1) {
            $video_id = $video[1];
          }
          @endphp
          <div class="col-sm-6">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/{{$video_id}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="col-sm-6">
            <div class="title-box-d">
              <h3 class="title-d">{{$post->name}}</h3>
            </div>
            <p class="content-d color-text-a">{{Str::limit(strip_tags($post->description), 200)}}</p>
            <a href="{{route('yoga.show', ['key' => $post->category->key, 'slug' => $post->slug])}}">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </section>
  @endsection
