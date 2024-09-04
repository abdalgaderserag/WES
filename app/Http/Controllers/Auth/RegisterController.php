<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(RegisterUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->department_id = $request->department_id;
        $user->role = $request->role;
        $user->salary = $request->salary;
        $user->password = Hash::make($request->password);
        $user->save();
        return response($user);
    }

    public function update(RegisterUserRequest $request,User $user)
    {
        $user->name = $request->name;
        $user->department_id = $request->department_id;
        $user->role = $request->role;
        $user->salary = $request->salary;
        $user->password = Hash::make($request->password);
        $user->update();
        return response($user);
    }

    public function show(User $user)
    {
        return response($user);
    }

    public function delete(User $user)
    {
        $user->delete();
        return response($user->id);
    }
}
