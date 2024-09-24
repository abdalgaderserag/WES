<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $tasks = $user->tasks()->get();
        return response($tasks);
    }

    public function create($id)
    {
        return view('mangment.task.create')->with(['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $task = new Task();
        $task->creator_id = Auth::id();
        $task->user_id = $request->user_id;
        $task->deadline = $request->deadline;
        $task->desciption = $request->description;
        $task->attachments = $request->attachments;
        $task->save();
        return response($task);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('user.task')->with(['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->user_id = $request->user_id;
        $task->deadline = $request->deadline;
        $task->desciption = $request->description;
        $task->attachments = $request->attachments;
        $task->update();
        return response($task);
    }

    public function approve(Task $task)
    {
        $task->status = 'completed';
        $task->update();
        return response($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->status = 'deleted';
        $task->update();
        return response($task);
    }
}
