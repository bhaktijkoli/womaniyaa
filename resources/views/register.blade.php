@extends('layouts.master')
@section('title')
  Signup | Womaniyaa
@endsection
@section('content')
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3>Register</h3>
              @livewire('register-form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
