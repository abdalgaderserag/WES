<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(LoginUserRequest $request)
    {
        $user = User::all()->where('username', '=', $request->username)->first();
        if (empty($user)){
            return response('there is no account with this username');
        }
        if (Hash::check($request->password, $user->password)){
            $token = $user->createToken($user->username . '-login');
            Auth::loginUsingId($user->id);
            return response($user, $token->plainTextToken);
        }else{
            return response('wrong password');
        }
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        Auth::logout();
        return response(1);
    }
}
