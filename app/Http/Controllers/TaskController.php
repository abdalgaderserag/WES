<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\User;
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
        $user = User::all()->where('id', '=', $id)->first();
        if (Auth::user()->role == 'employ'){
            return abort(401);
        }elseif($user->department_id !== Auth::user()->department_id){
            return abort(401);
        }
        return view('mangment.task.create')->with(['id' => $id]);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('user.task')->with(['id'=>$id]);
    }

    public function submit(Task $task)
    {
        if ($task->user_id !== Auth::id())
            return abort(401);
        return view('mangment.task.submit')->with(['id' => $task->id]);
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
