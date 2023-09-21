<?php

namespace App\Livewire;

use Livewire\Component;

class TeachersDashboard extends Component
{
    public function render()
    {
        return view('livewire.teachers-dashboard');
        return redirect()->to('/profile/{id}' . $this->teacher->id);
    }
   
}
