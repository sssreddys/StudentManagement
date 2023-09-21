<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Teacher;
use Carbon\Carbon;
use Livewire\WithFileUploads;
class TeachersProfile extends Component
{
    use WithFileUploads;

    public $teacher;
    public $dateOfBirth;
    public $newDateOfBirth;
    public $teacherId;
    public $image;

    public function mount($id)
    {
        $this->teacher = Teacher::find($id);
    }

    public function storeImage()
    {
        if (!$this->image) {
            return null;
        }

        $name = Str::random() . '.jpg';
        $this->image->storeAs('public', $name);

        return $name;
    }
    public function render()
    {
        return view('livewire.teachers-profile');
    }

    public function saveData()
    {
        $validated = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required|date_format:d/m/Y',
            'gender' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'experience' => 'required',
            'qualification' => 'required',
            'remarks' => 'required'
        ]);

        $validated['date_of_birth'] = Carbon::createFromFormat('d/m/Y', $validated['date_of_birth'])->format('d-m-y');

        if ($this->image) {
            $validated['image'] = $this->storeImage();
        }

        $this->teacher->update($validated);

        session()->flash('success', 'Teacher profile updated successfully.');

        return redirect()->to('/teacher/edit/{id}' . $this->teacher->id);
    }

    public function getImageProperty()
    {
        return $this->teacher ? asset('storage/' . $this->teacher->image) : null;
    }
}