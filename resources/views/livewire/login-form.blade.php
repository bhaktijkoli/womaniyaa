<form wire:submit.prevent="submit" class="form">
  <div class="form-group">
    <label for="email">Email</label>
    <input wire:model="email" type="text" class="form-control form-control-a" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input wire:model="password" type="password" class="form-control form-control-a" placeholder="Enter password">
    @if (session()->has('message'))
      <div class="validate" style="display:block">
        {{ session('message') }}
      </div>
    @endif
  </div>
  <button type="submit" class="btn btn-b">Login</button>
  <p>Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
</form>
