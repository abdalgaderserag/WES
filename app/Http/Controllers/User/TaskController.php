<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tasks = $user->tasks->get();
        return response($tasks);
    }


    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response($task);
    }


    /**
     * Update the specified resource in storage.
     */
    public function submit(Request $request, Task $task)
    {
        $media = new Media($request->all());
        $media->save();
        $task->submit_id = $media->id;
        $task->status = 'waiting for approve';
        return response($task,$media);
    }
}
