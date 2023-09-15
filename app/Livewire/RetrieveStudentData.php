<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class RetrieveStudentData extends Component
{
    public $students;
    public function mount(){
        $this->students=Student::all();
    }
    public function render()
    {
        return view('livewire.retrieve-student-data');
    }
}
