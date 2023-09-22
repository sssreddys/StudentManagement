<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\StudentMarks;
use Livewire\WithFileUploads;
class TeacherReport extends Component
{
    use WithFileUploads;
    public $student_id;

    public $selected_exam;

    public $telugu_marks;

    public $english_marks;

    public $maths_marks;

    public $science_marks;

    public $social_marks;

    public $hindi_marks;

 

    protected $rules = [

        'student_id' => 'required|integer',

        'selected_exam' => 'required|string',

        'telugu_marks' => 'nullable|numeric',

        'english_marks' => 'nullable|numeric',

        'maths_marks' => 'nullable|numeric',

        'science_marks' => 'nullable|numeric',

        'social_marks' => 'nullable|numeric',

        'hindi_marks' => 'nullable|numeric',

    ];

 

    public function addMarks()

    {

    
        $this->validate();

 

        // Create a new StudentMark record

        StudentMarks::create([

            'student_id' => $this->student_id,

            'selected_exam' => $this->selected_exam,

            'telugu_marks' => $this->telugu_marks,

            'english_marks' => $this->english_marks,

            'maths_marks' => $this->maths_marks,

            'science_marks' => $this->science_marks,

            'social_marks' => $this->social_marks,

            'hindi_marks' => $this->hindi_marks,

        ]);

             

              // Clear the form fields

 

              $this->reset();

              $this->selected_exam="";

              $this->telugu_marks="";

              $this->english_marks="";

              $this->maths_marks="";

              $this->science_marks="";

              $this->social_marks="";

              $this->hindi_marks="";

 

              // Optionally, you can add a success message here

              session()->flash('message', 'Marks added successfully!');

          }

         

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);

    }
    public function render()
    {
        return view('livewire.teacher-report');
    }
}
