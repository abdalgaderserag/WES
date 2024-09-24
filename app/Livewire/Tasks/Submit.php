<?php

namespace App\Livewire\Tasks;

use App\Models\Media;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Submit extends Component
{
    public Task $task;

    public $text;


    public function mount($id)
    {
        $this->task = Task::all()->where('id','=',$id)->first();
    }

    public function send()
    {
        $this->task->submit_at = now();
        $media = new Media([
            'sender_id' => Auth::id(),
            'text' => $this->text
        ]);
        $media->save();
        $this->task->submit_id = $media->id;
        $this->task->status = 2;
        $this->task->update();
        Redirect::route('dashboard');
    }

    public function render()
    {
        return view('livewire.tasks.submit');
    }
}
