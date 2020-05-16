<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
  public $post;
  public $comments;
  public $message;

  public function mount($post)
  {
    $this->post = $post;
    $this->comments = $post->comments;
  }

  public function doLike()
  {
    auth()->user()->upVote($this->post);
  }

  public function doUnLike()
  {
    auth()->user()->cancelVote($this->post);
  }

  public function render()
  {
    return view('livewire.comments');
  }

  public function comment()
  {
    auth()->user()->comment($this->post, $this->message, 0);
    $this->comments = $this->post->comments;
    $this->message = "";
  }
}
