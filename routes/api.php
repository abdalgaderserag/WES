<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('usertest',function (){
    $user = \Illuminate\Support\Facades\Auth::user();
    return response($user);
})->middleware('auth:sanctum');

//guests routes for unauthanticated user
Route::middleware('guest:sanctum')->namespace('App\Http\Controllers')->group(function (){
    Route::post('login','Auth\LoginController@login');
});

Route::post('test', function (Request $request){
    return $request;
});


//auth routes
Route::middleware('auth:sanctum')->namespace('App\Http\Controllers')->group(function (){
    Route::get('logout','Auth\LoginController@logout')->name('logout');

    Route::get('u/{user}','Auth\UserController@show')->name('user');
    Route::put('update/profile','Auth\UserController@update')->name('update_profile');
});

//admin routes
Route::middleware('auth:sanctum')->namespace('App\Http\Controllers')->group(function (){
    Route::post('user/register','Auth\RegisterController@register')->name('register_user');
    Route::put('user/{user}','Auth\RegisterController@update')->name('update_user');
    Route::get('user/{user}','Auth\RegisterController@show')->name('show_user');
    Route::delete('user/{user}','Auth\RegisterController@delete')->name('delete_user');
});

Route::get('task/all', 'App\Http\Controllers\User\TaskController@index');
