<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Notifications\QueryNotification;
use Notification;

class EmailQuery extends Component
{
  public $email;
  public $query;
  public $isMailSubmitted = false;

  public function render()
  {
    return view('livewire.email-query');
  }

  public function submitMail()
  {
    $this->validate([
      'email' => 'required|email',
    ]);
    $this->isMailSubmitted = true;
  }

  public function submitQuery()
  {
    $this->validate([
      'query' => 'required',
    ]);
    Notification::route('mail', 'patiltejashree2107@gmail.com')->notify(new QueryNotification($this->email, $this->query));
    $this->email = "";
    $this->query = "";
    $this->isMailSubmitted = false;
  }
}
