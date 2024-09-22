<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});


Route::get('/', function (){
    \Illuminate\Support\Facades\Auth::loginUsingId(1);
    $num = random_int(1,2);
    if ($num == 2)
        return view('mangment.dashboard');
    return view('dashboard');
});

Route::get('notifications', function (){
    return view('user.notification');
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

Route::get('/task/create', function (){
    return view('mangment.task.create');
});
