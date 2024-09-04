<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response($user);
    }

    public function update(UpdateUserRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->update();
        return response($user);
    }
}
