<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
  public $email;
  public $password;

  public function render()
  {
    return view('livewire.login-form');
  }

  public function submit()
  {
    $credentials = ['email' => $this->email, 'password' => $this->password];
    if(auth()->attempt($credentials)) {
      return redirect()->route('home');
    }
    session()->flash('message', 'Invalid email or password.');
  }
}
