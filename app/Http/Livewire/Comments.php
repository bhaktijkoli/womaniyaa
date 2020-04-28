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

  public function render()
  {
    return view('livewire.comments');
  }

  public function comment()
  {
    auth()->user()->comment($this->post, $this->message, 0);
    $this->message = "";
  }
}
