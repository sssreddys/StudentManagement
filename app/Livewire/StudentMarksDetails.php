<?php

namespace App\Livewire;

use App\Models\StudentMarks;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class StudentMarksDetails extends Component
{
    public $class;
    public $classes = [];
    public $studentsData = [];

    public function loadStudentData()
    {
        if ($this->class) {
            $students = DB::table('student_marks')
                ->where('class', $this->class)
                ->select('std_id', 'std_name', 'eng_marks', 'tel_marks', 'maths_marks', 'science_marks', 'biology_marks', 'social_marks', 'computer_marks', 'total_marks')
                ->get();

            $this->studentsData = $students->toArray();
        } else {
            $this->studentsData = [];
        }
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
            $students = StudentMarks::where('class', $this->class)->get();

            $this->studentsData = [];

            $counter = 1;

            foreach ($students as $student) {
                $this->studentsData[] = [
                    'serialNo' => $counter,
                    'studentIds' => $student->std_id,
                    'studentNames' => $student->std_name,
                    'englishMarks' => $student->eng_marks,
                    'teluguMarks' => $student->tel_marks,
                    'mathsMarks' => $student->maths_marks,
                    'scienceMarks' => $student->science_marks,
                    'biologyMarks' => $student->biology_marks,
                    'socialMarks' => $student->social_marks,
                    'computerMarks' => $student->computer_marks,
                    'totalMarks' => $student->total_marks,
                    'percentage' => number_format(($student->eng_marks + $student->tel_marks + $student->maths_marks + $student->science_marks + $student->biology_marks + $student->social_marks + $student->computer_marks) / 700 * 100, 2),
                    'result' => ($student->eng_marks < 35 || $student->tel_marks < 35 || $student->maths_marks < 35 || $student->science_marks < 35 || $student->social_marks < 35 || $student->computer_marks < 35 || $student->biology_marks < 35) ? 'Fail' : 'Pass',
                ];
            
                $counter++; // Increment the counter
            }
            
        } else {
            $this->studentsData = [];
        }

        return view('livewire.student-marks-details');
    }

    public function customSort($class)
    {
        preg_match('/(\d+)(\w+)/', $class, $matches);
        if (count($matches) === 3) {
            $numericPart = intval($matches[1]);
            $ordinalPart = $matches[2];
            return [$numericPart, $ordinalPart];
        }
        return $class;
    }
}    

