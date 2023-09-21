<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class RetrieveStudentData extends Component
{
    public $students;
    
    public $showModal=false;
    public $showAlertDialog=false;
    public $studentIdToDelete;

    public $showDialog=false;

    public function confirmAlertDialog($id)
    {
        $this->studentIdToDelete = $id;
        $this->showAlertDialog = true;

    }

    public function cancelAlertDialog()
    {

        $this->showAlertDialog = false;

    }
    public function confirmDialog($id)
    {
        $this->studentIdToDelete = $id;
        $this->showDialog = true;

    }

    public function edit($id)
    {
      
        if ($this->studentIdToDelete){
            $student = Student::find($id);

            if ($student) {
                return redirect()->route('edit-student-details', ['std_id' => $this->studentIdToDelete]);
            }

            // Reset the properties and close the modal
            $this->studentIdToDelete = null;
            $this->showAlertDialog = false;
           }
    }
    public function cancelDialog()
    {

        $this->showDialog = false;

    }
    public function confirmDelete($id)
    {
        $this->studentIdToDelete = $id;
        $this->showModal = true;
    }
    

    public function cancelDelete()
    {

        $this->showModal = false;

    }

    public function deleteStudent()
    {
        if ($this->studentIdToDelete) {
            $student = Student::find($this->studentIdToDelete);

            if ($student) {
                // Update the student's status to "Inactive"
                $student->update(['std_status' => 'Inactive']);
            }

            // Reset the properties and close the modal
            $this->studentIdToDelete = null;
            $this->showModal = false;
        }
        return redirect()->to('/RetrieveStudentData');
    }
    public function inactiveToActive()
    {
        if ($this->studentIdToDelete) {
            $student = Student::find($this->studentIdToDelete);

            if ($student) {
                // Update the student's status to "Inactive"
                $student->update(['std_status' => 'Active']);
            }
            // Reset the properties and close the modal
            $this->studentIdToDelete = null;
            $this->showModal = false;
        }
       return redirect()->to('/RetrieveStudentData');
    }
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.retrieve-student-data');
    }
}
