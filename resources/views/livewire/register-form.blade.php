<form wire:submit.prevent="submit" class="form">
  @if (session()->has('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @else
    <div class="form-group">
      <label for="name">Name</label>
      <input wire:model="name" type="text" class="form-control form-control-a" placeholder="Enter email">
      @error('name')
        <div class="validate" style="display:block">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input wire:model="email" type="text" class="form-control form-control-a" placeholder="Enter email">
      @error('email')
        <div class="validate" style="display:block">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input wire:model="password" type="password" class="form-control form-control-a" placeholder="Enter password">
      @error('password')
        <div class="validate" style="display:block">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-b">Register</button>
    <p>Already have an account? <a href="{{route('login')}}">Login</a></p>
  @endif
</form>
