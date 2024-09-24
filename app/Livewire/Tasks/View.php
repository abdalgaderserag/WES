<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class View extends Component
{
    public $task;

    public function mount($id)
    {
        $this->task = Task::all()->where('id','=', $id)->first();
    }

    public function message()
    {
        Redirect::route('message', $this->task->creator->username);
    }

    public function submit()
    {
        Redirect::route('task.submit', $this->task->id);
    }

    public function render()
    {
        return view('livewire.tasks.view');
    }
}
