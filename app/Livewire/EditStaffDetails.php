<?php

namespace App\Livewire;

use App\Models\Staff;
use Livewire\Component;
use Livewire\WithFileUploads;
class EditStaffDetails extends Component
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
    public $image;
    public $staff;

    public function mount($id)
    {

        $this->staff = Staff::find($id);
        if ($this->staff) {
            $this->registration_date = $this->staff->registration_date;
            $this->registration_number = $this->staff->registration_number;
            $this->first_name = $this->staff->first_name;
            $this->last_name = $this->staff->last_name;
            $this->gender = $this->staff->gender;
            $this->dob = $this->staff->dob;
            $this->phone_no = $this->staff->phone_no;
            $this->address = $this->staff->address;
            $this->email = $this->staff->email;
            $this->nationality = $this->staff->nationality;
            $this->alternate_phone_no = $this->staff->alternate_phone_no;
            $this->aadhar_no = $this->staff->aadhar_no;
            $this->staff_type = $this->staff->staff_type;
            $this->profession = $this->staff->profession;
            $this->work_experience = $this->staff->work_experience;
            $this->qualification = $this->staff->qualification;
            $this->religion = $this->staff->religion;
            $this->image = $this->staff->image_path;
        }
    }

    public function update()
    {

        if ($this->staff) {

            $this->staff->update([
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
                'image_path' => $this->image,
            ]);
            if ($this->image instanceof \Illuminate\Http\UploadedFile) {
                $imagePath = $this->image->store('public/staff-images');
                $this->staff->update(['image_path' => str_replace('public/', '', $imagePath)]);
            }
        }

        session()->flash('stf_success', 'Staff Details Updated Successfully.');
        return redirect()->to('/RetrieveStaffData');
    }
    public function render()
    {
        return view('livewire.edit-staff-details');
    }
}
