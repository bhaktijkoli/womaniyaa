@if ($isMailSubmitted)
  <form class="form" wire:submit.prevent="submitQuery">
    <div class="row">
      <div class="form-group col-sm-8">
        <label for="query">Your Query</label>
        <textarea wire:model="query" type="text" class="form-control form-control-a" rows="5"></textarea>
        @error('query')
          <div class="validate" style="display:block">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-b btn-block" style="margin-top:30px">Submit</button>
      </div>
    </div>
  </form>
@else
  <form class="form" wire:submit.prevent="submitMail">
    <div class="row">
      <div class="form-group col-sm-8">
        <label for="email">Email</label>
        <input wire:model="email" type="text" class="form-control form-control-a" placeholder="Enter email">
        @error('email')
          <div class="validate" style="display:block">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-sm-4">
        <button type="submit" class="btn btn-b btn-block" style="margin-top:30px">Get Started</button>
      </div>
    </div>
  </form>
@endif
