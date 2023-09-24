<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;
use App\Models\Teacher;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class TeachersEdit extends Component
{

    use WithFileUploads;
    public $first_name,$last_name,$email, $image,$mobile, $teacher_edit_id, $address, $date_of_birth, $gender, $experience, $qualification, $remarks, $teacher;
        


    public function mount($id)
    {
        $this->teacher = Staff::find($id);
        $this->first_name = $this->teacher->first_name;
        $this->last_name = $this->teacher->last_name;
        $this->email = $this->teacher->email;
        $this->image = $this->teacher->image_path;
        $this->mobile = $this->teacher->phone_no;
        $this->address = $this->teacher->address;
        $this->date_of_birth = $this->teacher->dob;
        $this->gender = $this->teacher->gender;
        $this->experience = $this->teacher->work_experience;
        $this->qualification = $this->teacher->qualification;
    }

   
    public function fileChoosen($image)
    {
        $this->emit('fileChoosen', $this->image);
    }
    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }

        $name = Str::random() . '.jpg';
        $this->image->storeAs('public', $name);

        return $name;
    }

    public function updateTeacher($id)
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $this->teacher_edit_id,
            'image' => 'required|image|unique:teachers,image,' . $this->teacher_edit_id,
            'mobile' => 'required|numeric|unique:teachers,mobile,' . $this->teacher_edit_id,
            'address' => 'required|string|unique:teachers,address,' . $this->teacher_edit_id,
            'date_of_birth' => 'required', // Correct date format
            'gender' => 'required|string|unique:teachers,gender,' . $this->teacher_edit_id,
            'experience' => 'required|string|unique:teachers,experience,' . $this->teacher_edit_id,
            'qualification' => 'required|string|unique:teachers,qualification,' . $this->teacher_edit_id,
            //'remarks' => 'required|string|unique:teachers,remarks,' . $this->teacher_edit_id,
        ]);
    
        $teacher = Staff::find($id);
        $teacher->name = $this->first_name;
        $teacher->email = $this->email;
        $teacher->mobile = $this->mobile;
        $teacher->address = $this->address;
        if ($this->image) {
            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('public/images', $imageName);
            $teacher->image = 'images/' . $imageName;
        }
        // Convert date_of_birth to 'Y-m-d' format
        $teacher->date_of_birth =  $this->date_of_birth;
    
        $teacher->gender = $this->gender;
        $teacher->experience = $this->experience;
        $teacher->qualification = $this->qualification;
        $teacher->remarks = $this->remarks;
    
        $teacher->save();
    
        session()->flash('message', 'Teacher has been updated successfully');
    }
    public function render()
    {
        return view('livewire.teachers-edit');
    }
}