<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class View extends Component
{
    public $task,$media;

    public function mount($id)
    {
        $this->task = Task::all()->where('id','=', $id)->first();
        if (!empty($this->task->submit_at)){
            $this->media = $this->task->media;
        }
    }

    public function message()
    {
        Redirect::route('message', $this->task->creator->username);
    }

    public function submit()
    {
        Redirect::route('task.submit', $this->task->id);
    }

    public function accept()
    {
        $this->task->status = 3;
        $this->task->update();


        $user = $this->task->user;
        $tasks = $user->tasks->filter(function ($t){
            return $t->status == 3;
        });

        $count = $tasks->count();

        if ($count !== 0){
            $on_time = $tasks->filter(function ($t){
                $dead = strtotime($t->deadline);
                $submit = strtotime($t->submit_at);
                return $submit <= $dead;
            })->count();
            $rate = ($on_time/$count) * 100;
            $user->rate = $rate;
            $user->save();
        }


        Redirect::route('dashboard');
    }

    public function reject()
    {
        $this->task->media->delete();
        $this->task->submit_id = null;
        $this->task->submit_at = null;
        $this->task->status = 1;
        $this->task->update();
        Redirect::route('dashboard');
    }

    public function render()
    {
        return view('livewire.tasks.view');
    }
}
