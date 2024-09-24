<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Create extends Component
{

    public $id, $title, $text, $deadline, $attachments;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function send()
    {
        $task = new Task([
            'creator_id' => Auth::id(),
            'user_id' => $this->id,
            'title' => $this->title,
            'deadline' => $this->deadline,
            'description' => $this->text,
            'attachments' => '',
            'status' => 1
        ]);
        $task->save();
        $this->reset(['title', 'text', 'deadline', 'attachments']);
        Redirect::route('dashboard');
    }

    public function render()
    {
        return view('livewire.tasks.create');
    }
}
