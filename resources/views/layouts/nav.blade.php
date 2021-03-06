<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="{{route('home')}}">Womaniyaa</a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Health
          </a>
          <div class="dropdown-menu">
            @foreach (App\HealthCategory::all() as $category)
              <a class="dropdown-item" href="{{route('health', $category->key)}}">{{$category->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Food
          </a>
          <div class="dropdown-menu">
            @foreach (App\FoodCategory::all() as $category)
              <a class="dropdown-item" href="{{route('food', $category->key)}}">{{$category->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fitness
          </a>
          <div class="dropdown-menu">
            @foreach (App\FitnessCategory::all() as $category)
              <a class="dropdown-item" href="{{route('fitness', $category->key)}}">{{$category->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Yoga
          </a>
          <div class="dropdown-menu">
            @foreach (App\YogaCategory::all() as $category)
              <a class="dropdown-item" href="{{route('yoga', $category->key)}}">{{$category->name}}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
        </li>
      </ul>
    </div>
    @if (Auth::check())
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img class="rounded-circle" width="42"src="{{Voyager::image(Auth::user()->avatar)}}"/>&nbsp;&nbsp;{{Auth::user()->name}}
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
        </div>
      </div>
    @else
      <a href="{{route('login')}}" class="btn btn-b-n d-none d-md-block">
        <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Login
      </a>
    @endif
  </div>
</nav>
