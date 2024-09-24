<?php

namespace App\Livewire\Tasks;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{

    public $id;
    #[Rule('required|min:3|max:54')]
    public $title;

    #[Rule('required|min:25|max:255')]
    public $text;
//    Todo:add the past validate
    #[Rule('required|date')]
    public $deadline;
    public $attachments;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function send()
    {
        $this->validate();
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
