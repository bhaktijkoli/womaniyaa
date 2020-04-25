<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
  <div class="container">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <a class="navbar-brand text-brand" href="index.html">Womaniyaa</a>
    <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
      <span class="fa fa-search" aria-hidden="true"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('home')}}">Home</a>
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
            <a class="dropdown-item" href="{{route('home')}}">Immune Building Elements</a>
            <a class="dropdown-item" href="{{route('home')}}">Recipes</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Fitness
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('home')}}">Lower Body</a>
            <a class="dropdown-item" href="{{route('home')}}">Upper Body</a>
            <a class="dropdown-item" href="{{route('home')}}">Core</a>
            <a class="dropdown-item" href="{{route('home')}}">Ployometrics</a>
            <a class="dropdown-item" href="{{route('home')}}">Locomotion</a>
            <a class="dropdown-item" href="{{route('home')}}">Cardio</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Yoga
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('home')}}">Flexibility</a>
            <a class="dropdown-item" href="{{route('home')}}">Stress Reduction</a>
            <a class="dropdown-item" href="{{route('home')}}">Digestion</a>
            <a class="dropdown-item" href="{{route('home')}}">Balance</a>
            <a class="dropdown-item" href="{{route('home')}}">Strength</a>
            <a class="dropdown-item" href="{{route('home')}}">Body Alignment</a>
            <a class="dropdown-item" href="{{route('home')}}">Concentration</a>
            <a class="dropdown-item" href="{{route('home')}}">Meditation</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">About Us</a>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-b-n d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
      <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;&nbsp;Login
    </button>
  </div>
</nav>
