<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;

class RetrieveStaffData extends Component
{
    public $staffs;
    public $showModal=false;
    public $showDialog=false;
    public $staffIdToDelete;
    public $showAlertDialog=false;

    public function edit($id)
    {
      
        if ($this->staffIdToDelete){
            $staff = Staff::find($id);

            if ($staff) {
                return redirect()->route('edit-staff-details', ['id' => $this->staffIdToDelete]);
            }

            // Reset the properties and close the modal
            $this->staffIdToDelete = null;
            $this->showAlertDialog = false;
           }
    }
    public function confirmAlertDialog($id)
    {
        $this->staffIdToDelete = $id;
        $this->showAlertDialog = true;

    }

    public function cancelAlertDialog()
    {

        $this->showAlertDialog = false;

    }
    public function deleteStaff()
    {
        if ($this->staffIdToDelete) {
            $staff = Staff::find($this->staffIdToDelete);

            if ($staff) {
                // Update the student's status to "Inactive"
                $staff->update(['staff_status' => 'Inactive']);
            }

            // Reset the properties and close the modal
            $this->staffIdToDelete = null;
            $this->showModal = false;
        }
       return redirect()->to('/RetrieveStaffData');
    }

    public function inactiveToActive()
    {
        if ($this->staffIdToDelete) {
            $staff = Staff::find($this->staffIdToDelete);

            if ($staff) {
                // Update the student's status to "Inactive"
                $staff->update(['staff_status' => 'Active']);
            }

            // Reset the properties and close the modal
            $this->staffIdToDelete = null;
            $this->showDialog = false;
        }
       return redirect()->to('/RetrieveStaffData');
    }
    public function confirmDialog($id)
    {
        $this->staffIdToDelete = $id;
        $this->showDialog = true;

    }

    public function cancelDialog()
    {

        $this->showDialog = false;

    }
    public function confirmDelete($id)
    {
        $this->staffIdToDelete = $id;
        $this->showModal = true;

    }

    public function cancelDelete()
    {

        $this->showModal = false;

    }

    public function render()
    {
        $this->staffs=Staff::all();
        return view('livewire.retrieve-staff-data');
    }
}
