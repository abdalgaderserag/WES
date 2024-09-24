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
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('user.task')->with(['id'=>$id]);
    }

    public function submit($id)
    {
        return view('mangment.task.submit')->with(['id' => $id]);
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
