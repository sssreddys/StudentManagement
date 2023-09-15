<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;

class RetrieveStaffData extends Component
{
    public $staffs;
    public function mount(){
        $this->staffs=Staff::all();
    }
    public function render()
    {
        return view('livewire.retrieve-staff-data');
    }
}
