<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentDashboard extends Component
{
    
  public function render()
    {
        $studentList = Student::where('std_id',auth()->guard('student')->user()->std_id)->get();
        return view('livewire.student-dashboard', ['students' => $studentList]);
    }
}
