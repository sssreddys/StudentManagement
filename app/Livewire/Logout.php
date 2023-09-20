<?php

namespace App\Livewire;

use Livewire\Component;

class Logout extends Component
{
    public function handleLogout()
    {
        auth()->logout();
        session()->flash('Success', "You are LoggedOut Successfully!");
        return redirect(route('login'));
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
