<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Setting extends Component
{
    use WithFileUploads;
    #[Rule('required|min:3|max:25')]
    public $name;

    #[Rule('required|min:6|max:24')]
    public $phone;

    public $img;

//    #[Rule('file|dimensions:ratio=1/1|image|extensions:jpg,png')]
    public $avatar;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->img = $user->img;
    }

    public function save()
    {
        $this->validate();
        $user = Auth::user();
        $user->name = $this->name;
        $user->phone = $this->phone;
        if ($this->avatar){
            $this->validate([
                'avatar' => 'file|dimensions:ratio=1/1|image|extensions:jpg,png'
            ]);
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
