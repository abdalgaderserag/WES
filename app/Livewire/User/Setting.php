<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithFileUploads;

class Setting extends Component
{
    use WithFileUploads;

    public $name, $phone, $img, $avatar;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->img = $user->img;
    }

    public function save()
    {
        $user = Auth::user();
        $user->name = $this->name;
        $user->phone = $this->phone;
        if ($this->avatar){
            $path = $this->avatar->store('images','public');
            logger($path);
            $user->img = $path;
        }
        $user->update();
        Redirect::route('profile');
    }

    public function cancel()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->phone = $user->phone;
    }

    public function render()
    {
        return view('livewire.user.setting');
    }
}
