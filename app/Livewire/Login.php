<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Login extends Component
{
    public $user='';
    public $username = '',$password ='';
    public function login()
    {
        $user = User::all()->where('username', '=', $this->username)->first();
        $this->user = $user;
        if (empty($user)){
            $this->user = 'there is no account with this username';
            return;
        }
        if (Hash::check($this->password, $user->password)){
            Auth::loginUsingId($user->id);
            $this->user = Auth::user();
            Redirect::route('dashboard');
        }else{
            $this->user = 'wrong password';
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}
