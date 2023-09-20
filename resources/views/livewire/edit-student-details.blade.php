<div>
    <div class="container mt-5">
        @if (session()->has('std_success'))
        <div class="std-success" style="color:green;padding:10px;border-radius:10px;margin:0px;background-color:lightgreen">
            <b style="text-align: center;"> {{ session('std_success') }}</b>
        </div>
        <script>
            setTimeout(function() {
                document.querySelector('.std-success').style.display = 'none';
            }, 5000);
        </script>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:indigo">
                        <h5 class="mb-0" style="text-align: center;color:white">Edit Student Information</h5>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="update" enctype="multipart/form-data">

                            {{-- Registration Details --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="registration_date">Registration Date</label>
                                <input type="date" class="form-control" wire:model="registration_date" max="{{ date('Y-m-d') }}">
                                @error('registration_date') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="registration_number">Registration Number</label>
                                <input type="text" class="form-control" wire:model="registration_number">
                                @error('registration_number') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Personal Information --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_first_name">First Name</label>
                                <input type="text" class="form-control" wire:model="std_first_name">
                                @error('std_first_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_last_name">Last Name</label>
                                <input type="text" class="form-control" wire:model="std_last_name">
                                @error('std_last_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Gender --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_gender">Gender</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model="std_gender" value="Male" id="maleRadio" name="gender">
                                    <label class="form-check-label" for="maleRadio">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" wire:model="std_gender" value="Female" id="femaleRadio" name="gender">
                                    <label class="form-check-label" for="femaleRadio">Female</label>
                                </div>
                                @error('std_gender') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Date of Birth --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_dob">Date of Birth</label>
                                <input type="date" class="form-control" wire:model="std_dob" max="{{ date('Y-m-d') }}">
                                @error('std_dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Father's Name --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_father_name">Father's Name</label>
                                <input type="text" class="form-control" wire:model="std_father_name">
                                @error('std_father_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Mother's Name --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_mother_name">Mother's Name</label>
                                <input type="text" class="form-control" wire:model="std_mother_name">
                                @error('std_mother_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Phone Number --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_phone_no">Phone Number</label>
                                <input type="text" class="form-control" wire:model="std_phone_no">
                                @error('std_phone_no') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Address --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_address">Address</label>
                                <input type="text" class="form-control" wire:model="std_address">
                                @error('std_address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Religion --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="religion">Religion</label>
                                <input type="text" class="form-control" wire:model="religion">
                                @error('religion') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Nationality --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_nationality">Nationality</label>
                                <input type="text" class="form-control" wire:model="std_nationality">
                                @error('std_nationality') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                            {{-- Aadhar Number --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_aadhar_no">Aadhar Number</label>
                                <input type="text" class="form-control" wire:model="std_aadhar_no">
                                @error('std_aadhar_no') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Class --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="class">Class</label>
                                <input type="text" class="form-control" wire:model="class">
                                @error('class') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Email --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="std_email">Email</label>
                                <input type="email" class="form-control" wire:model="std_email">
                                @error('std_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            {{-- Upload Student Image --}}
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="student_image">Student Image</label>
                                <input type="file" class="form-control-file" wire:model="student_image">
                            </div>
                            <div>
                                @if ($student_image)
                                @if (is_string($student_image))
                                <!-- Display the saved image -->
                                <img height="50" width="50" src="{{ Storage::url($student_image) }}" alt="Saved Image" class="img-preview">
                                <span>{{ $student_image }}</span>
                                @else
                                <!-- Display the temporary image -->
                                <img height="50" width="50" src="{{ $student_image->temporaryUrl() }}" alt="Temporary Image" class="img-preview">
                                <span>{{ $student_image->getClientOriginalName() }}</span>
                                @endif
                                @endif
                            </div>


                            <div style="text-align: center;">
                                <!-- Your Livewire component content -->
                                <button type="submit" wire:loading.attr="disabled" class="btn btn-primary">Update</button>
                                <p wire:loading>Loading...</p>
                                <p wire:loading.remove></p>
                            </div>
                            <div wire:debug></div>
                            <style>
                                button[wire\:loading] {
                                    opacity: 0.5;
                                    /* Reduce opacity during loading */
                                    cursor: not-allowed;
                                    /* Change cursor during loading */
                                }

                                p {
                                    color: green;
                                    font-weight: bold;
                                }
                            </style>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
    /* Custom CSS classes for the "Save" button */
    .btn-save {
        background-color: #007bff; /* Change to your desired color */
        color: #fff; /* Change to your desired color */
    }

    /* Custom CSS classes for the "Loading" text */
    .text-loading {
        color: #ff9900; /* Change to your desired color */
    }
</style>
</div>