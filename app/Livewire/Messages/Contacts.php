<?php

namespace App\Livewire\Messages;

use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Contacts extends Component
{
    public $contacts,$username,$test;

    public function mount()
    {
        $dep_id = Auth::user()->department_id;
        $this->contacts = User::all()->where('department_id','=', $dep_id);
    }

    public function message($username)
    {
//        var_dump($username);
//        $this->test = $username;
//        Redirect::back();
        Redirect::route('message', $username);
    }
    public function render()
    {
        return view('livewire.messages.contacts');
    }
}
