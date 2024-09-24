<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{

    public $user;

    public $ongoing,$completed,$waiting;

    public function mount()
    {
        $this->user = Auth::user();
        $tasks = $this->user->tasks;

        $this->ongoing = $tasks->filter(function ($t){
            return $t->status !== 3;
        })->count();

        $this->completed = $tasks->filter(function ($t){
            return $t->status == 3;
        })->count();

        $this->waiting = $tasks->filter(function ($t){
            return $t->status == 2;
        })->count();
    }

    public function render()
    {
        return view('livewire.user.profile');
    }
}
