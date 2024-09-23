<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Index extends Component
{
    public $tasks;

    public function mount()
    {
        $this->tasks = Task::all()->where('user_id', '=', Auth::id());
    }

    public function view($id)
    {
        Redirect::route('task.show',$id);
    }
    public function render()
    {
        return view('livewire.tasks.index');
    }
}
