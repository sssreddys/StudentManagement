<!-- resources/views/livewire/add-student-marks.blade.php -->

<div class="container" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="text-align: center;background-color:indigo;color:white">Add Student Marks</div>

                @if (session('success'))
                    <div class="alert alert-success mt-3 ml-3 mr-3">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card-body">
                    <form wire:submit.prevent="saveMarks">
                        @csrf

                        <div class="form-group">
                            <label for="student_id">Select Student:</label>
                            <select wire:model="student_id" id="student_id" class="form-control">
                                <option value="">Select a student</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->std_id }}">{{ $student->std_first_name }} {{ $student->std_last_name }}</option>
                                @endforeach
                            </select>
                            @error('student_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input wire:model="subject" type="text" name="subject" id="subject" class="form-control">
                            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="marks">Marks:</label>
                            <input wire:model="marks" type="number" name="marks" id="marks" class="form-control">
                            @error('marks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                       <div style="text-align:center">
                       <button type="submit" class="btn btn-primary">Add Marks</button>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
