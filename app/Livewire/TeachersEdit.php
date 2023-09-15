<?php

namespace App\Livewire;

use Livewire\Component;

class TeachersEdit extends Component
{
    public $teacher;

    public function mount($id)
    {
        $this->teacher = Teacher::find($id);
    }
    public function render()
    {
        return view('livewire.teachers-edit');
    }
}
