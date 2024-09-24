<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required')]
    public $username = '';

    #[Rule('required|min:8')]
    public $password ='';
    public function login()
    {
        $this->validate();
        $user = User::all()->where('username', '=', $this->username)->first();
        if (empty($user)){
//            'there is no account with this username';
            return;
        }
        if (Hash::check($this->password, $user->password)){
            Auth::loginUsingId($user->id);
//            $this->user = Auth::user();
            Redirect::route('dashboard');
//        }else{
//            'wrong password';
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
