<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Student;
class StudentRegistration extends Component
{
    use WithFileUploads;
    public $std_id;
    public $registration_date;
    public $registration_number;
    public $registration_type;
    public $std_last_name;
    public $std_first_name;
    public $std_gender;
    public $std_dob;
    public $std_father_name;
    public $std_mother_name;
    public $std_phone_no;
    public $std_address;
    public $std_email;
    public $std_nationality;
    public $std_aadhar_no;
    public $class;
    public $religion;
    public $student_image;
    public $password;

    protected $rules = [
        'std_id' => 'required|unique:students',
        'registration_date' => 'required',
        'registration_number' => 'required|unique:students',
        'std_first_name' => 'required',
        'std_last_name' => 'required',
        'std_gender' => 'required',
        'std_dob' => 'required|date',
        'std_father_name' => 'required',
        'std_mother_name' => 'required',
        'std_phone_no' => 'required|unique:students',
        'std_address' => 'required',
        'std_email' => 'required|email|unique:students',
        'std_nationality' => 'required',
        'std_aadhar_no' => 'required|unique:students',
        'class' => 'required',
        'religion' => 'required',
        'student_image' => 'required', 
        'password' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        if ($this->student_image) {
            $imagePath = $this->student_image->store('public/student-images');
            $this->student_image = str_replace('public/', '', $imagePath);
        }
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
        Student::create([
            'std_id' => $this->std_id,
            'registration_date' => $this->registration_date,
            'registration_number' => $this->registration_number,
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
            'std_aadhar_no' => $this->std_aadhar_no,
            'class' => $this->class,
            'religion' => $this->religion,
            'student_image_path' => $this->student_image,
            'password'=>$passwordHash,
        ]);

        // Reset form fields
        $this->reset();
        $this->std_id="";
        $this->registration_date="";
        $this->registration_number="";
        $this->std_first_name="";
        $this->std_last_name="";
        $this->std_gender="";
        $this->std_dob="";
        $this->std_father_name="";
        $this->std_mother_name="";
        $this->std_phone_no="";
        $this->std_address="";
        $this->std_email="";
        $this->std_nationality="";
        $this->std_aadhar_no="";
        $this->class="";
        $this->religion="";
        $this->student_image="";
        $this->password="";

        // Optionally, you can show a success message
        session()->flash('std success', 'Student Registered Successfully.');
        return redirect()->to('/StudentRegistration');
    }
    public function render()
    {
        return view('livewire.student-registration');
    }
}
