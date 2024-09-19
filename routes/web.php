<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});


Route::get('/', function (){
    \Illuminate\Support\Facades\Auth::loginUsingId(1);
    return view('dashboard');
});

Route::get('/task', function (){
    return view('user.task');
});

Route::get('/messages', function (){
    return view('messages');
});

Route::get('logout',function (){
    \Illuminate\Support\Facades\Auth::logout();
});
