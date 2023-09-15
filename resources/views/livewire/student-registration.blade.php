
<div class="container mt-5" >
    @if (session()->has('std success'))
    <div class="std-success" style="color:green;padding:10px;border-radius:10px;margin:0px;background-color:lightgreen">
        <b style="text-align: center;"> {{ session('std success') }}</b>
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
                    <h5 class="mb-0" style="text-align: center;color:white">Student Registration Form</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="submit" enctype="multipart/form-data">
                        {{-- Student ID --}}
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_id">Student ID</label>
                            <input type="text" class="form-control" wire:model="std_id">
                            @error('std_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        {{-- Registration Details --}}
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="registration_date">Registration Date</label>
                            <input type="date" class="form-control" wire:model="registration_date">
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

                        <div class="form-group" style="margin-bottom: 25px;">
                        <div class="form-group" style="margin-bottom: 25px;">
    <label>Gender</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="std_gender" value="male" id="maleRadio" name="gender">
        <label class="form-check-label" for="maleRadio">Male</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="std_gender" value="female" id="femaleRadio" name="gender">
        <label class="form-check-label" for="femaleRadio">Female</label>
    </div>
</div>
<div>
    @error('std_gender') <span class="text-danger">{{ $message }}</span> @enderror
</div>



                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_dob">Date of Birth</label>
                            <input type="date" class="form-control" wire:model="std_dob">
                            @error('std_dob') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_father_name">Father's Name</label>
                            <input type="text" class="form-control" wire:model="std_father_name">
                            @error('std_father_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_mother_name">Mother's Name</label>
                            <input type="text" class="form-control" wire:model="std_mother_name">
                            @error('std_mother_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_phone_no">Phone Number</label>
                            <input type="text" class="form-control" wire:model="std_phone_no">
                            @error('std_phone_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_address">Address</label>
                            <input type="text" class="form-control" wire:model="std_address">
                            @error('std_address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="religion">Religion</label>
                            <input type="text" class="form-control" wire:model="religion">
                            @error('religion') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_nationality">Nationality</label>
                            <input type="text" class="form-control" wire:model="std_nationality">
                            @error('std_nationality') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_alternate_phone_no">Alternate Phone Number</label>
                            <input type="text" class="form-control" wire:model="std_alternate_phone_no">
                            @error('std_alternate_phone_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_aadhar_no">Aadhar Number</label>
                            <input type="text" class="form-control" wire:model="std_aadhar_no">
                            @error('std_aadhar_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="class">Class</label>
                            <input type="text" class="form-control" wire:model="class">
                            @error('class') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="std_email">Email</label>
                            <input type="email" class="form-control" wire:model="std_email">
                            @error('std_email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" wire:model="password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>


                        {{-- Upload Student Image --}}
                        <div class="form-group">
    <label for="student_image">Student Image</label>
    <input type="file" class="form-control-file" wire:model="student_image">
</div>
<div>
    @error('student_image') <span class="text-danger">{{ $message }}</span> @enderror
    @if ($student_image)
        <img height="50" width="50" src="{{ $student_image->temporaryUrl() }}" alt="Preview" class="img-preview">
        <!-- Custom text for file chosen -->
        <span>{{ $student_image->getClientOriginalName() }}</span>
    @endif
</div>


    <div class="text-center mb-4">
    <button type="submit" 
        class="btn btn-save" 
        :class="{'btn-primary': !isLoading, 'btn-secondary': isLoading}" 
        wire:loading.attr="disabled"
        wire:target="submit"
    >
        <span wire:loading.remove>Save</span>
        <span wire:loading>Loading...</span>
    </button>
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





                    </form>
                </div>
            </div>
        </div>
    </div>
</div>