<?php

use Illuminate\Support\Facades\Route;
Route::namespace('App\Http\Controllers')->group(function (){

Route::get('/login', 'NavigateController@login')->name('login')->middleware('guest');




Route::middleware('auth')->group(function (){
    Route::get('/', 'NavigateController@dashboard')->name('dashboard');

    Route::get('notifications', 'NavigateController@notification')->name('notification');

    Route::get('/messages', 'NavigateController@messages')->name('messages');
    Route::get('/messages/{username}', 'NavigateController@message')->name('message');


    Route::get('/task/{task}', 'TaskController@show')->name('task.show');
});
});
