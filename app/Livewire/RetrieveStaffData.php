<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;

class RetrieveStaffData extends Component
{
    public $staffs;
    public function deleteStaff($id)
    {
        $staff = Staff::find($id);
               if ($staff) {
            $staff->update(['staff_status' => 'Inactive']);
        }
    }
    public function render()
    {
        $this->staffs=Staff::all();
        return view('livewire.retrieve-staff-data');
    }
}
