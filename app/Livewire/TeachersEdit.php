<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Teacher;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class TeachersEdit extends Component
{

    use WithFileUploads;
    public $name, $email, $image,$mobile, $teacher_edit_id, $address, $date_of_birth, $gender, $experience, $qualification, $remarks, $teacher;
        


    public function mount($id)
    {
        $this->teacher = Teacher::find($id);

        $this->name = $this->teacher->name;
        $this->email = $this->teacher->email;
        $this->image = $this->teacher->image;
        $this->mobile = $this->teacher->mobile;
        $this->address = $this->teacher->address;
        $this->date_of_birth = $this->teacher->date_of_birth;
        $this->gender = $this->teacher->gender;
        $this->experience = $this->teacher->experience;
        $this->qualification = $this->teacher->qualification;
        $this->remarks = $this->teacher->remarks;

        $this->teacher_edit_id = $this->teacher->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $this->teacher_edit_id,
             'image' => 'required|image|unique:teachers,image,' . $this->teacher_edit_id,
            'mobile' => 'required|numeric|unique:teachers,mobile,' . $this->teacher_edit_id,
            'address' => 'required|string|unique:teachers,address,' . $this->teacher_edit_id,
            'date_of_birth' => 'required|date|unique:teachers,date_of_birth,' . $this->teacher_edit_id,
            'gender' => 'required|string|unique:teachers,gender,' . $this->teacher_edit_id,
            'experience' => 'required|string|unique:teachers,experience,' . $this->teacher_edit_id,
            'qualification' => 'required|string|unique:teachers,qualification,' . $this->teacher_edit_id,
            'remarks' => 'required|string|unique:teachers,remarks,' . $this->teacher_edit_id,
        ]);
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

    public function updateTeacher()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $this->teacher_edit_id,
            'image' => 'required|image|unique:teachers,image,' . $this->teacher_edit_id,
            'mobile' => 'required|numeric|unique:teachers,mobile,' . $this->teacher_edit_id,
            'address' => 'required|string|unique:teachers,address,' . $this->teacher_edit_id,
            'date_of_birth' => 'required', // Correct date format
            'gender' => 'required|string|unique:teachers,gender,' . $this->teacher_edit_id,
            'experience' => 'required|string|unique:teachers,experience,' . $this->teacher_edit_id,
            'qualification' => 'required|string|unique:teachers,qualification,' . $this->teacher_edit_id,
            'remarks' => 'required|string|unique:teachers,remarks,' . $this->teacher_edit_id,
        ]);
    
        $teacher = Teacher::find($this->teacher_edit_id);
    
        $teacher->name = $this->name;
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