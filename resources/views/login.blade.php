@extends('layouts.master')
@section('title')
  Login | Womaniyaa
@endsection
@section('content')
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <div class="title-box-d">
                <h3 class="title-d">Login</h3>
              </div>
              @livewire('login-form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
