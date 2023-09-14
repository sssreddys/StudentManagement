<?php

namespace App\Livewire;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class AdminLogin extends Component
{

    public $form = [
        'email'=>'',
        'password'=>'',
    ];
    public $error = '';
    public function handleLogin()
    {
        $this->validate([
            "form.email"=> 'required|email',
            "form.password"=> "required"
        ]);



        Auth::attempt($this->form);
        if (Auth::attempt($this->form))
        {
            
            session()->flash('success', "You are Loggedin successfully!");
            return redirect(route("home"));
        }
        else
        {
            $this->error = "Email or Password wrong!!";
        }


    }
    public function render()
    {
        return view('livewire.admin-login');
    }
}
