<form wire:submit.prevent="submit">
  @if (session()->has('message'))
    <div class="alert alert-success">
      {{ session('message') }}
    </div>
  @else
    <div class="form-group">
      <label for="name">Name</label>
      <input wire:model="name" type="text" class="form-control" placeholder="Enter email">
      @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input wire:model="email" type="text" class="form-control" placeholder="Enter email">
      @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input wire:model="password" type="password" class="form-control" placeholder="Enter password">
      @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
  @endif
</form>
