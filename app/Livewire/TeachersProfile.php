<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;
use App\Models\Teacher;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class TeachersProfile extends Component
{
    public function render()
    {
        $teacherList = Staff::where('staff_id',auth()->guard('staff')->user()->staff_id)->get();
        return view('livewire.teachers-profile', ['teacher' => $teacherList]);
    }
}