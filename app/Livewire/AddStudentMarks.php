<?php

namespace App\Livewire;
use App\Models\Student;
use Livewire\Component;
use App\Models\AddStudentMark;

class AddStudentMarks extends Component {
    public $class;
    public $std_id;
    public $std_name;
    public $englishMarks;
    public $teluguMarks;
    public $mathsMarks;
    public $scienceMarks;
    public $biologyMarks;
    public $socialMarks;
    public $computerMarks;
    public $totalMarks;
    public $percentage;


    public $classes = [];
    public $studentIds = [];
    public $studentNames = [];

    public function saveStudentMarks() {
        $validatedData = $this->validate( [
            'class' => 'required',
            'std_id' => 'required|unique:add_student_marks',
            'std_name' => 'required',
            'englishMarks' => 'required|numeric|max:100',
            'teluguMarks' => 'required|numeric|max:100',
            'mathsMarks' => 'required|numeric|max:100',
            'scienceMarks' => 'required|numeric|max:100',
            'biologyMarks' => 'required|numeric|max:100',
            'socialMarks' => 'required|numeric|max:100',
            'computerMarks' => 'required|numeric|max:100',
            'totalMarks'=>'required|numeric|max:700',
            'percentage'=>'required'
        ] );

        AddStudentMark::create( [
            'class' => $validatedData[ 'class' ],
            'std_id' => $validatedData[ 'std_id' ],
            'std_name' => $validatedData[ 'std_name' ],
            'eng_marks' => $validatedData[ 'englishMarks' ],
            'tel_marks' => $validatedData[ 'teluguMarks' ],
            'maths_marks' => $validatedData[ 'mathsMarks' ],
            'science_marks' => $validatedData[ 'scienceMarks' ],
            'biology_marks' => $validatedData[ 'biologyMarks' ],
            'social_marks' => $validatedData[ 'socialMarks' ],
            'computer_marks' => $validatedData[ 'computerMarks' ],
            'total_marks' => $validatedData[ 'totalMarks' ],
            'percentage'=>$validatedData['percentage'],
        ] );
        session()->flash( 'message', 'Student Marks Added Successfully.' );
        return redirect()->to( '/AddStudentMarksDetails' );
    }

    public function updateTotalMarks() {
        $total=$this->englishMarks + $this->teluguMarks + $this->mathsMarks + $this->scienceMarks + $this->biologyMarks + $this->socialMarks + $this->computerMarks;
        $this->totalMarks=$total;
        $totalPossibleMarks = 700;
        $percentage = ($total / $totalPossibleMarks) * 100;
        $this->percentage=$percentage;
    }

    public function render() {
        $this->classes = Student::distinct( 'class' )->pluck( 'class' )->toArray();
        $students = Student::where( 'class', $this->class )->get();
        $student = Student::where( 'std_id', $this->std_id )->get();
        $this->studentIds = $students->pluck( 'std_id' )->toArray();
        $this->studentNames = $student->pluck( 'std_first_name' )->toArray();
        return view( 'livewire.add-student-marks' );
    }
}
