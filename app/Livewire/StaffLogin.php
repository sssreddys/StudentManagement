<?php

namespace App\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
class StaffLogin extends Component
{


    public $form = [
        'staff_id'=>'',
        'password'=>'',
    ];
    public $error = '';
    public function staffLogin()
    {
        $this->validate([
            "form.staff_id"=> 'required',
            "form.password"=> "required"
        ]);
        
        // $staff = Staff::where('staff_id', $this->form['staff_id'])->first();
        // $pass=$staff && password_verify($this->form['password'], $staff->password);
        // $providedPassword = $this->form['password'];
        // $hashedPasswordInDatabase = $staff->password;
        // $pass = password_verify($providedPassword, $hashedPasswordInDatabase);
        //  if ($staff && password_verify($this->form['password'], $staff->password)) {
        //     // Authentication successful
        //     session()->flash('success', 'You are logged in successfully!');
        //     return redirect()->route('staff');
        // } else {
        //     $this->error = "Email or Password wrong!!";
        // }

        if (Auth::guard('staff')->attempt($this->form))
        {
            
            session()->flash('success', "You are Loggedin Successfully!");
            return redirect(route("staff"));
        }
        else
        {
            $this->error = "Staff ID or Password Wrong!!";
        }

    }


    public function render()
    {
        return view('livewire.staff-login');
    }



}
