<?php

namespace App\Livewire\Layouts;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Header extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function profile()
    {
        Redirect::to('/profile');
    }

    public function setting()
    {
        Redirect::to('/setting');
    }

    public function logout()
    {
        Auth::logout();
        Redirect::route('login');
    }

    public function render()
    {
        return view('livewire.layouts.header');
    }
}
