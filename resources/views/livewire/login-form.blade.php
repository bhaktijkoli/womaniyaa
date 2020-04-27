<form wire:submit.prevent="submit">
  <div class="form-group">
    <label for="email">Email</label>
    <input wire:model="email" type="text" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input wire:model="password" type="password" class="form-control" placeholder="Enter password">
  </div>
  @if (session()->has('message'))
    <div class="alert alert-danger">
      {{ session('message') }}
    </div>
  @endif
  <button type="submit" class="btn btn-primary">Login</button>
</form>
