<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavigateController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(){
        $user = Auth::user();
        if ($user->role == "department-head")
            return view('mangment.dashboard');
        elseif ($user->role == "employ")
            return view('dashboard');
        else
            return '404';
    }

    public function notification(){
        return view('user.notification');
    }

    public function messages()
    {
        return view('messages')->with(['username' => '']);
    }

    public function message($username)
    {
        return view('messages')->with(['username' => $username]);
    }

    public function profile()
    {
        return view('user.profile')->with(['user' => Auth::user()]);
    }

    public function setting()
    {
        return view('user.setting');
    }
}
