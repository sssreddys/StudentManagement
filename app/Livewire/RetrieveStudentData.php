<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class RetrieveStudentData extends Component
{
    public $students;

    public function deleteStudent($id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->update(['std_status' => 'Inactive']);
        }
    }
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.retrieve-student-data');
    }
}
