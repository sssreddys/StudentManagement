<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Staff;
class StaffRegistration extends Component
{
    use WithFileUploads;

    public $staff_id;
    public $registration_date;
    public $registration_number;
    public $first_name;
    public $last_name;
    public $gender;
    public $dob;
    public $phone_no;
    public $address;
    public $email;
    public $nationality;
    public $alternate_phone_no;
    public $aadhar_no;
    public $staff_type;
    public $profession;
    public $work_experience;
    public $qualification;
    public $religion;
    public $password;
    public $image;

    protected $rules = [
        'staff_id' => 'required|unique:staff',
        'registration_date' => 'required',
        'registration_number' => 'required|unique:staff',
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'dob' => 'required|date',
        'phone_no' => 'required',
        'address' => 'required',
        'email' => 'required|email|unique:staff',
        'nationality' => 'required',
        'alternate_phone_no' => 'required',
        'aadhar_no' => 'required|unique:staff',
        'staff_type' => 'required',
        'profession' => 'required',
        'work_experience' => 'required',
        'qualification' => 'required',
        'religion' => 'required',
        'password' => 'required',
        'image' => 'required',
    ];

    public function submit()
    {
        $this->validate();

        if ($this->image) {
            $imagePath = $this->image->store('public/staff-images');
            $this->image = str_replace('public/', '', $imagePath);
        }
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);

        Staff::create([
            'staff_id' => $this->staff_id,
            'registration_date' => $this->registration_date,
            'registration_number' => $this->registration_number,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'gender' => $this->gender,
            'dob' => $this->dob,
            'phone_no' => $this->phone_no,
            'address' => $this->address,
            'email' => $this->email,
            'nationality' => $this->nationality,
            'alternate_phone_no' => $this->alternate_phone_no,
            'aadhar_no' => $this->aadhar_no,
            'staff_type' => $this->staff_type,
            'profession' => $this->profession,
            'work_experience' => $this->work_experience,
            'qualification' => $this->qualification,
            'religion' => $this->religion,
            'password' => $passwordHash,
            'image_path' => $this->image,
        ]);

        $this->reset();
        $this->staff_id="";
        $this->registration_date="";
        $this->registration_number="";
        $this->first_name="";
        $this->last_name="";
        $this->gender="";
        $this->dob="";
        $this->phone_no="";
        $this->address="";
        $this->email="";
        $this->nationality="";
        $this->alternate_phone_no="";
        $this->aadhar_no="";
        $this->staff_type="";
        $this->profession="";
        $this->work_experience="";
        $this->qualification="";
        $this->religion="";
        $this->password="";
        $this->image="";
        session()->flash('stf success', 'Staff Registered Successfully.');
        return redirect()->to('/');

    }
    public function render()
    {
        return view('livewire.staff-registration');
    }
}
