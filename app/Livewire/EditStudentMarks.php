<?php

namespace App\Livewire;

use App\Models\StudentMarks;
use App\Models\Student;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditStudentMarks extends Component
{
    public $class;
    public $classes = [];
    public $studentsData = [];
    public function editAllStudentMarks() {
        $rules = [
            'class' => 'required|string',
        ];
    
        foreach ($this->studentsData as $index => $studentData) {
            $rules["studentsData.{$index}.studentIds"] = [
                'required',
                'numeric',
                Rule::exists('student_marks', 'std_id'), 
            ];
            $rules["studentsData.{$index}.studentNames"] = 'required|string';
            $rules["studentsData.{$index}.englishMarks"] = 'required|numeric|max:100';
            $rules["studentsData.{$index}.teluguMarks"] = 'required|numeric|max:100';
            $rules["studentsData.{$index}.mathsMarks"] = 'required|numeric|max:100';
            $rules["studentsData.{$index}.scienceMarks"] = 'required|numeric|max:100';
            $rules["studentsData.{$index}.biologyMarks"] = 'required|numeric|max:100';
            $rules["studentsData.{$index}.socialMarks"] = 'required|numeric|max:100';
            $rules["studentsData.{$index}.computerMarks"] = 'required|numeric|max:100';
            $rules["studentsData.{$index}.totalMarks"] = 'required|numeric|max:700';
        }
    
        $this->validate($rules);
    
        try {
            foreach ($this->studentsData as $index => $studentData) {
                $existingStudent = StudentMarks::where('std_id', $studentData['studentIds'])->first();
    
                if (!$existingStudent) {
                    continue; 
                }
    
                $existingStudent->class = $this->class;
                $existingStudent->std_name = $studentData['studentNames'];
                $existingStudent->eng_marks = $studentData['englishMarks'];
                $existingStudent->tel_marks = $studentData['teluguMarks'];
                $existingStudent->maths_marks = $studentData['mathsMarks'];
                $existingStudent->science_marks = $studentData['scienceMarks'];
                $existingStudent->biology_marks = $studentData['biologyMarks'];
                $existingStudent->social_marks = $studentData['socialMarks'];
                $existingStudent->computer_marks = $studentData['computerMarks'];
                $existingStudent->total_marks = $studentData['totalMarks'];
    
                $existingStudent->save();
            }
    
            session()->flash('message', 'All Students\' Marks Edited Successfully.');
            return redirect()->to('/EditStudentMarksDetails');
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while editing students\' marks: ' . $e->getMessage());
        }
    }
    

    public function editStudentMarks($index) {
        $existingStudent = StudentMarks::where('std_id', $this->studentsData[$index]['studentIds'])->first();
    
        if (!$existingStudent) {
            return redirect()->back()->with('error', 'Student data not found for editing.');
        }
    
        $this->validate([
            'class' => 'required|string',
            'studentsData.' . $index . '.studentNames' => 'required|string',
            'studentsData.' . $index . '.englishMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.teluguMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.mathsMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.scienceMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.biologyMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.socialMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.computerMarks' => 'required|numeric|max:100',
            'studentsData.' . $index . '.totalMarks' => 'required|numeric|max:700',
        ]);
    
        $studentData = $this->studentsData[$index];
    
        $existingStudent->class = $this->class;
        $existingStudent->std_name = $studentData['studentNames'];
        $existingStudent->eng_marks = $studentData['englishMarks'];
        $existingStudent->tel_marks = $studentData['teluguMarks'];
        $existingStudent->maths_marks = $studentData['mathsMarks'];
        $existingStudent->science_marks = $studentData['scienceMarks'];
        $existingStudent->biology_marks = $studentData['biologyMarks'];
        $existingStudent->social_marks = $studentData['socialMarks'];
        $existingStudent->computer_marks = $studentData['computerMarks'];
        $existingStudent->total_marks = $studentData['totalMarks'];

    
        $existingStudent->save();
        
        session()->flash('message', 'Student Marks Edited Successfully.');
        return redirect()->to('/EditStudentMarksDetails');
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
        $this->classes = StudentMarks::distinct('class')
            ->pluck('class')
            ->toArray();
    
        $this->classes = collect($this->classes)->sortBy(function ($class) {
            return $this->customSort($class);
        })->values()->toArray();
    
        if (!empty($this->class)) {
            $students = StudentMarks  ::where('class', $this->class)->get();
    
            $this->studentsData = [];
    
            $counter = 1; 
    
            foreach ($students as $student) {
                $this->studentsData[] = [
                    'serialNo' => $counter, 
                    'studentIds' => $student->std_id,
                    'studentNames' => $student->std_name,
                    'englishMarks' => $student->eng_marks,
                    'teluguMarks' =>  $student->tel_marks,
                    'mathsMarks' =>  $student->maths_marks,
                    'scienceMarks' => $student->science_marks,
                    'biologyMarks' =>  $student->biology_marks,
                    'socialMarks' => $student->social_marks,
                    'computerMarks' =>  $student->computer_marks,
                    'totalMarks' =>  $student->total_marks,
                    'percentage' => number_format(($student->eng_marks + $student->tel_marks + $student->maths_marks + $student->science_marks + $student->biology_marks + $student->social_marks + $student->computer_marks) / 700 * 100, 2),
                    'result' => ($student->eng_marks < 35 || $student->tel_marks < 35 || $student->maths_marks < 35 || $student->science_marks < 35 || $student->social_marks < 35 || $student->computer_marks < 35 || $student->biology_marks < 35) ? 'Fail' : 'Pass',
                ];
    
                $counter++; // Increment the counter
            }
        } else {
            $this->studentsData = [];
        }
    
        return view('livewire.edit-student-marks');
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
