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
    </ul>
  </div>
  <div class="form-group">
    <textarea wire:model="message" class="form-control">
    </textarea>
  </div>
  <button class="btn btn-primary" wire:click="comment">Post Comment</button>
</div>
