<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Hash;

class RegisterForm extends Component
{
  public $name;
  public $email;
  public $password;

  public function render()
  {
    return view('livewire.register-form');
  }

  public function submit()
  {
    $this->validate([
      'name' => 'required|min:4',
      'email' => 'required|unique:users,email',
      'password' => 'required|min:8',
    ]);

    $user = User::create([
      'name' => $this->name,
      'email' => $this->email,
      'password' => Hash::make($this->password),
    ]);
    session()->flash('message', 'You have registered successfully.');
  }
}
