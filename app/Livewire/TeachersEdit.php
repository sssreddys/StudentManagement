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

 

    public $name, $email, $mobile, $staff_edit_id, $address, $date_of_birth, $gender, $experience, $qualification, $remarks, $staff;

    public $tempImage = null;

    public $image = null;
   

    


    
    
        public function mount($id)
    
        {
    
            $this->staff = Staff::find($id);
    
            $this->name = $this->staff->first_name;
    
            $this->email = $this->staff->email;
    
            $this->tempImage = $this->staff->image_path;
    
            $this->mobile = $this->staff->phone_no;
    
            $this->address = $this->staff->address;
    
            $this->date_of_birth = $this->staff->dob;
    
            $this->gender = $this->staff->gender;
    
            $this->experience = $this->staff->work_experience;
    
            $this->qualification = $this->staff->qualification;
    
     
    
            $this->staff_edit_id = $this->staff->staff_id;
    
        }
    
     
    
        public function updatedImage($value)
    
        {
    
            if ($value instanceof \Illuminate\Http\UploadedFile) {
    
                $this->validate([
    
                    'image' => 'image|max:2048', // Add validation rules as needed.
    
                ]);
    
       
    
                $this->tempImage = $value; // Assign the uploaded file to the $tempImage property.
    
            } elseif (!$this->tempImage && $this->image) {
    
                // If no new image uploaded and there is an existing image, display the existing image.
    
                $this->tempImage = $this->image;
    
            }
    
        }
    
       
    
     
    
        public function storeImage()
    
    {
    
        if ($this->tempImage instanceof \Illuminate\Http\UploadedFile) {
    
            // Store and return the path for the new image.
    
            $name = 'profile_'  . '.' . $this->tempImage->getClientOriginalExtension();
    
            $this->tempImage->storeAs('public', $name);
    
            return $name;
    
        }
    
     
    
        // If no new image is uploaded, return the existing image path.
    
        return $this->staff->image_path;
    
    }
    
     
    
    public function updateTeacher()
    
    {
    
        // Validate other form fields as needed.
    
     
    
        $staff = Staff::find($this->staff_edit_id);
    
     
    
        $staff->first_name = $this->name;
    
        $staff->email = $this->email;
    
        $staff->phone_no = $this->mobile;
    
        $staff->address = $this->address;
    
        $staff->image_path = $this->storeImage(); // Store the image and assign the path.
    
        $staff->dob = $this->date_of_birth;
    
        $staff->gender = $this->gender;
    
        $staff->work_experience = $this->experience;
    
        $staff->qualification = $this->qualification;
    
     
    
        $staff->save();
    
     
    
        session()->flash('message', 'Staff has been updated successfully');
        return redirect()->to('/teacher-profile');
    
    }
    
     
    
        public function render()
    
        {
    
            return view('livewire.teachers-edit');
    
        }
    
    } 