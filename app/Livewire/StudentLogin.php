<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class StudentLogin extends Component
{
    public $form = [
        'std_id'=>'',
        'password'=>'',
    ];
    public $error = '';
    public function staffLogin()
    {
        $this->validate([
            "form.std_id"=> 'required',
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

        if (Auth::guard('student')->attempt($this->form))
        {
            
            session()->flash('success', "You are Loggedin successfully!");
            return redirect(route("student"));
        }
        else
        {
            $this->error = "Email or Password wrong!!";
        }

    }
    public function render()
    {
        return view('livewire.student-login');
    }
}
