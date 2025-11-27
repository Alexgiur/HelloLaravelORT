<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Counter extends Component
{
    public $counter = -6;
    public $username = 'Boby';
    public $email = 'bob@by.bu';
    public User $user;

    // constructeur
    public function mount(User $user)
    {
        $this->user = $user;
        $this->username = $user->name;
        $this->email = $user->email;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function increment()
    {
        $this->counter++;
    }

    public function bidon()
    {
        dd('bidon');
    }

    public function submit()
    {
        $this->validate([
            'username' => 'required|min:5',
            'email' => 'required|email'
        ]);
        $this->user->name = $this->username;
        $this->user->email = $this->email;
        $this->user->save();
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
