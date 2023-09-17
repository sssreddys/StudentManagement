<?php

namespace App\Livewire; 

use App\Models\Staff;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditStudentDetails extends Component
{
    use WithFileUploads;

    public $student; // Store the student model
    public $student_id;
    public $registration_date;
    public $registration_number;
    public $registration_type;
    public $std_first_name;
    public $std_last_name;
    public $std_gender;
    public $std_dob;
    public $std_father_name;
    public $std_mother_name;
    public $std_phone_no;
    public $std_address;
    public $std_email;
    public $std_nationality;
    public $std_alternate_phone_no;
    public $std_aadhar_no;
    public $class;
    public $religion;
    public $student_image;
    public $password;


    public function mount($std_id)
    {
        $this->student = Student::find($std_id);

        if ($this->student) {
            $this->registration_date = $this->student->registration_date;
            $this->registration_number = $this->student->registration_number;
            $this->registration_type = $this->student->registration_type;
            $this->std_first_name = $this->student->std_first_name;
            $this->std_last_name = $this->student->std_last_name;
            $this->std_gender = $this->student->std_gender;
            $this->std_dob = $this->student->std_dob;
            $this->std_father_name = $this->student->std_father_name;
            $this->std_mother_name = $this->student->std_mother_name;
            $this->std_phone_no = $this->student->std_phone_no;
            $this->std_address = $this->student->std_address;
            $this->std_email = $this->student->std_email;
            $this->std_nationality = $this->student->std_nationality;
            $this->std_alternate_phone_no = $this->student->std_alternate_phone_no;
            $this->std_aadhar_no = $this->student->std_aadhar_no;
            $this->class = $this->student->class;
            $this->religion = $this->student->religion;
            $this->password=$this->student->password;
            $this->student_image = $this->student->student_image_path;
        }
    }

    public function update()
    {

        if ($this->student) {
            // Update only the fields that were changed
            $this->student->update(array_filter([
                'registration_date' => $this->registration_date,
                'registration_number' => $this->registration_number,
                'registration_type' => $this->registration_type,
                'std_first_name' => $this->std_first_name,
                'std_last_name' => $this->std_last_name,
                'std_gender' => $this->std_gender,
                'std_dob' => $this->std_dob,
                'std_father_name' => $this->std_father_name,
                'std_mother_name' => $this->std_mother_name,
                'std_phone_no' => $this->std_phone_no,
                'std_address' => $this->std_address,
                'std_email' => $this->std_email,
                'std_nationality' => $this->std_nationality,
                'std_alternate_phone_no' => $this->std_alternate_phone_no,
                'std_aadhar_no' => $this->std_aadhar_no,
                'class' => $this->class,
                'religion' => $this->religion,
                'password'=>$this->password,
                'student_image_path'=>$this->student_image
            ]));

            if ($this->student_image instanceof \Illuminate\Http\UploadedFile) {
                $imagePath = $this->student_image->store('public/student-images');
                $this->student->update(['student_image_path' => str_replace('public/', '', $imagePath)]);
            }
            
        }

        session()->flash('std_success', 'Student information updated successfully.');
        return redirect()->to('/'); // Redirect to the desired page after update
    }
    public function render()
    {
        return view('livewire.edit-student-details');
    }
}
