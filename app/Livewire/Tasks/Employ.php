<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Employ extends Component
{
    public $tasks;

    public function mount()
    {
        $this->tasks = Task::all()->where('creator_id', '=', Auth::id())->where('status', '!=', 3)->sortByDesc('status');
    }

    public function view($id)
    {
        Redirect::route('task.show',$id);
    }

    public function chatView($username)
    {
        logger($username);
        Redirect::route('messages',$username);
    }

    public function render()
    {
        return view('livewire.tasks.employ');
    }
}
