<?php

namespace App\Livewire\Management;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Workers extends Component
{

    public $workers;

    public function mount()
    {
        $dep = Auth::user()->department;
        $this->workers = $dep->users->filter(function ($u){
            return $u->id !== Auth::id();
        });;
    }

    public function create($id)
    {
        Redirect::route('task.create',$id);
    }
    public function render()
    {
        return view('livewire.management.workers');
    }
}
