<?php

namespace App\Livewire;

use App\Models\Mark;
use App\Models\Student;
use Livewire\Component;

class AddStudentMarks extends Component
{
    public $student_id;
    public $subject;
    public $marks;

    public function render()
    {
        $students = Student::all();

        return view('livewire.add-student-marks', compact('students'));
    }

    public function saveMarks()
    {
        $this->validate([
            'student_id' => 'required|exists:students,std_id',
            'subject' => 'required|string',
            'marks' => 'required|integer',
        ]);

        // Create a new mark record
        Mark::create([
            'std_id' => $this->student_id,
            'subject' => $this->subject,
            'marks' => $this->marks,
        ]);
         $this->student_id='';
         $this->subject='';
         $this->marks='';

        session()->flash('success', 'Marks added successfully.');

        // Clear the form fields
        $this->reset(['student_id', 'subject', 'marks']);
        return redirect()->to('/');
    }
}
