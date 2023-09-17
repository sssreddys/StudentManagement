<?php

namespace App\Livewire;
use App\Models\StudentMarks;
use Livewire\Component;
class StudentMarksDetails extends Component
{

    public $studentMarks;
    public function mount(){
       $this->studentMarks=StudentMarks::all();
    }
    public function render()
    {
        return view('livewire.student-marks-details');
    }
}
