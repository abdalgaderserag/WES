<?php

namespace App\Livewire\Messages;

use App\Models\Media;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Page extends Component
{
    use WithFileUploads;

    public $username, $user;
    public $messages = [];

    //todo:fix validation (write it manually?)
//    #[Rule('required|min:1|max:255')]
    public $content = '';

    public $attachment = [];
    public $attachments = [];


    public function mount()
    {
        if (!empty($this->username)){
            $this->user = User::all()->where('username','=',$this->username)->first();
        }else{
            $dep = Auth::user()->department;
            $this->messages =
                Media::all()->where('department_id','=',$dep->id)
                ->sortBy('created_at');
            $this->user = $dep;
        }
    }

    public function send()
    {
        if ($this->content == ''){
            return;
        }
        $media = new Media([
            'sender_id' => Auth::id(),
            'text' => $this->content
        ]);
        if (empty($username)){
            $media->department_id = Auth::user()->department_id;
        }else{
            $media->user_id = $this->user->id;
        }
        foreach ($this->attachments as $attach){
            $path = $attach->store('uploads/messages','public');
            $media->attachments = $path;
        }
        $media->save();
        $this->reset(['content','attachments']);
        $this->messages = collect($this->messages)->add($media);
    }

    public function saveFile()
    {
        $this->attachments = collect($this->attachments);
        $this->attachment = collect($this->attachment);
        $this->attachments = $this->attachments->merge($this->attachment);
        $this->attachment = [];
    }

    public function deleteFile($id)
    {
        $this->attachment = [];
        $this->attachments = $this->attachments->except($id);

    }

    public function render()
    {
        return view('livewire.messages.page');
    }
}
