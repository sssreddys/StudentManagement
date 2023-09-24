<?php

namespace App\Livewire;

use Livewire\Component;

class Logout extends Component
{
    public function handleLogout()
    {

        if (auth()->guard('staff')->check()) {
            // Custom logout logic for staff users
            auth()->guard('staff')->logout();
            session()->flash('Success', "You are LoggedOut Successfully!");
            return redirect(route('staff'));
        } elseif (auth()->guard('student')->check()) {
            // Custom logout logic for student users
            auth()->guard('student')->logout();
            session()->flash('Success', "You are LoggedOut Successfully!");
            return redirect(route('student'));
        } else {
            auth()->logout();
            session()->flash('Success', "You are LoggedOut Successfully!");
            return redirect(route('login'));
        }
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
