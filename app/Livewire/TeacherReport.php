<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\Student;
use App\Models\StudentMarks;
use Livewire\WithFileUploads;
class TeacherReport extends Component
{
    public $class;
    public $classes = [];
    public $studentsData = [];

    public function saveAllStudents() {
        $rules = [
            'class' => 'required|string',
        ];

        foreach ( $this->studentsData as $index => $studentData ) {
            $rules[ "studentsData.{$index}.studentIds" ] = [
                'required',
                'numeric',
                Rule::unique( 'student_marks', 'std_id' )
                ->ignore( $studentData[ 'studentIds' ] )
            ];
            $rules[ "studentsData.{$index}.studentNames" ] = 'required|string';
            $rules[ "studentsData.{$index}.englishMarks" ] = 'required|numeric|max:100';
            $rules[ "studentsData.{$index}.teluguMarks" ] = 'required|numeric|max:100';
            $rules[ "studentsData.{$index}.mathsMarks" ] = 'required|numeric|max:100';
            $rules[ "studentsData.{$index}.scienceMarks" ] = 'required|numeric|max:100';
            $rules[ "studentsData.{$index}.biologyMarks" ] = 'required|numeric|max:100';
            $rules[ "studentsData.{$index}.socialMarks" ] = 'required|numeric|max:100';
            $rules[ "studentsData.{$index}.computerMarks" ] = 'required|numeric|max:100';
            $rules[ "studentsData.{$index}.totalMarks" ] = 'required|numeric|max:700';
        }

        $this->validate( $rules );

        try {
            foreach ( $this->studentsData as $index => $studentData ) {
                StudentMarks::create( [
                    'class' => $this->class,
                    'std_id' => $studentData[ 'studentIds' ],
                    'std_name' => $studentData[ 'studentNames' ],
                    'eng_marks' => $studentData[ 'englishMarks' ],
                    'tel_marks' => $studentData[ 'teluguMarks' ],
                    'maths_marks' => $studentData[ 'mathsMarks' ],
                    'science_marks' => $studentData[ 'scienceMarks' ],
                    'biology_marks' => $studentData[ 'biologyMarks' ],
                    'social_marks' => $studentData[ 'socialMarks' ],
                    'computer_marks' => $studentData[ 'computerMarks' ],
                    'total_marks' => $studentData[ 'totalMarks' ],
    
                ] );
            }

            session()->flash( 'message', 'All Students\' Marks Added Successfully.');
        return redirect()->to('/teacher-report');
    } catch (\Exception $e) {
        session()->flash('error', 'An error occurred while saving students\' marks: ' . $e->getMessage() );
        }
    }

    public function saveStudentMarks( $index ) {

        $this->validate( [
            'class' => 'required|string',
            'studentsData.*.studentIds' => [
                'required',
                'numeric',
                Rule::unique( 'student_marks', 'std_id' )->ignore( $this->studentsData[ $index ][ 'studentIds' ] ),
            ],

            'studentsData.' . $index . '.studentNames' => 'required|string',
            'studentsData.' . $index . '.englishMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.teluguMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.mathsMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.scienceMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.biologyMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.socialMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.computerMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.totalMarks' => 'required|numeric|max:700',
        ] );

        $studentData = $this->studentsData[ $index ];
        StudentMarks::create( [
            'class' => $this->class,
            'std_id' => $studentData[ 'studentIds' ],
            'std_name' => $studentData[ 'studentNames' ],
            'eng_marks' => $studentData[ 'englishMarks' ],
            'tel_marks' => $studentData[ 'teluguMarks' ],
            'maths_marks' => $studentData[ 'mathsMarks' ],
            'science_marks' => $studentData[ 'scienceMarks' ],
            'biology_marks' => $studentData[ 'biologyMarks' ],
            'social_marks' => $studentData[ 'socialMarks' ],
            'computer_marks' => $studentData[ 'computerMarks' ],
            'total_marks' => $studentData[ 'totalMarks' ],
        ] );
        session()->flash( 'message', 'Student Marks Added Successfully.' );
        return redirect()->to( '/teacher-report' );
    }

    public function addStudentRow() {
        $this->studentsData[] = [
            'studentIds' => null,
            'studentNames' => null,
            'englishMarks' => null,
            'teluguMarks' => null,
            'mathsMarks' => null,
            'scienceMarks' => null,
            'biologyMarks' => null,
            'socialMarks' => null,
            'computerMarks' => null,
            'totalMarks' => null,
            'percentage' => null,
            'result'=>null,
        ];
    }

    public function calculateTotal( $index ) {
        $studentData = $this->studentsData[ $index ];
        $totalMarks = array_sum( [
            $studentData[ 'englishMarks' ],
            $studentData[ 'teluguMarks' ],
            $studentData[ 'mathsMarks' ],
            $studentData[ 'scienceMarks' ],
            $studentData[ 'biologyMarks' ],
            $studentData[ 'socialMarks' ],
            $studentData[ 'computerMarks' ],
        ] );

        $this->studentsData[ $index ][ 'totalMarks' ] = $totalMarks;
        $percentage = ( $totalMarks / 700 ) * 100;
        $this->studentsData[ $index ][ 'percentage' ] = number_format( $percentage, 2 );
        if ($totalMarks < 245||( $studentData[ 'englishMarks' ]<35|| $studentData[ 'teluguMarks' ]<35||
        $studentData[ 'mathsMarks' ]<35||$studentData[ 'scienceMarks' ]<35|| $studentData[ 'biologyMarks' ]<35
        ||$studentData[ 'socialMarks' ]<35||$studentData[ 'computerMarks' ]<35)) {
            $this->studentsData[ $index ][ 'result' ] = 'Fail'; 
        } else {
            $this->studentsData[ $index ][ 'result' ] = 'Pass';
   
        }
        $this->skipRender();
    }
    
    public function render()
    {
        $this->classes = Student::distinct('class')
            ->pluck('class')
            ->toArray();
    
        $this->classes = collect($this->classes)->sortBy(function ($class) {
            return $this->customSort($class);
        })->values()->toArray();
    
        if (!empty($this->class)) {
            $students = Student::where('class', $this->class)->get();
    
            $this->studentsData = [];
    
            $counter = 1; 
    
            foreach ($students as $student) {
                $this->studentsData[] = [
                    'serialNo' => $counter, 
                    'studentIds' => $student->std_id,
                    'studentNames' => $student->std_first_name,
                    'englishMarks' => null,
                    'teluguMarks' => null,
                    'mathsMarks' => null,
                    'scienceMarks' => null,
                    'biologyMarks' => null,
                    'socialMarks' => null,
                    'computerMarks' => null,
                    'totalMarks' => null,
                    'percentage' => null,
                    'result' => null,
                ];
    
                $counter++; // Increment the counter
            }
        } else {
            $this->studentsData = [];
        }
    
        return view('livewire.teacher-report');
    }
    
    function customSort($class) {
        preg_match('/(\d+)(\w+)/', $class, $matches);
        if (count($matches) === 3) {
            $numericPart = intval($matches[1]);
            $ordinalPart = $matches[2];
            return [$numericPart, $ordinalPart];
        }
        return $class;
    }
    
}
