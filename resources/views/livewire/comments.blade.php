<div class="comments">
  <div class="title-box-d mt-3">
    <h4 class="title-d">Comments({{count($comments)}})</h4>
  </div>
  <div class="box-comments">
    <ul class="list-comments">
      @foreach ($comments as $comment)
        <li>
          <div class="comment-avatar">
            <img src="{{Voyager::image($comment->commented->avatar)}}" alt="{{$comment->commented->name}}">
          </div>
          <div class="comment-details">
            <h4 class="comment-author">{{$comment->commented->name}}</h4>
            <span>{{$comment->created_at->diffForHumans()}}</span>
            <p class="comment-description">
              {{$comment->comment}}
            </p>
          </div>
        </li>
      @endforeach
      <li>
        @if (Auth::check())
          <div class="comment-avatar">
            <img src="{{Voyager::image(Auth::user()->avatar)}}" alt="{{Auth::user()->name}}">
          </div>
          <div class="comment-details" style="width:100%">
            <h4 class="comment-author">{{Auth::user()->name}}</h4>
            <div class="form">
              <div class="form-group">
                <textarea wire:model="message" class="form-control form-control-a" style="height:10rem">
                </textarea>
              </div>
            </div>
            <button class="btn btn-b" wire:click="comment">Post Comment</button>
          </div>
        @else
          <div class="text-center">
            <a href="{{route('login')}}" class="btn btn-b" wire:click="comment">Login</a>
          </div>
        @endif
      </li>
    </ul>
  </div>
</div>
