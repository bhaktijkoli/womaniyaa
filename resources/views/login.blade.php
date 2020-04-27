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
              <h3>Login</h3>
              @livewire('login-form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
