
<div class="container mt-5">
@livewire('staff-control')
@if (session()->has('stf success'))
        <div class="stf-success" style="color:green;padding:10px;border-radius:10px;margin:0px;background-color:lightgreen">
        <b style="text-align: center;">  {{ session('stf success') }}</b>
        </div>
        <script>
                setTimeout(function () {
                    document.querySelector('.stf-success').style.display = 'none';
                }, 5000); 
            </script>
        @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"  style="background-color:indigo">
                    <h5 class="mb-0" style="text-align: center;color:white">Staff Registration Form</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="submit" enctype="multipart/form-data">
                        <!-- Staff ID -->
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="staff_id">Staff ID</label>
                            <input type="text" class="form-control" wire:model="staff_id">
                            @error('staff_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="registration_date">Registration Date</label>
                            <input type="date" class="form-control" wire:model="registration_date" >
                            @error('registration_date') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="registration_number">Registration Number</label>
                            <input type="text" class="form-control" wire:model="registration_number" >
                            @error('registration_number') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Personal Information -->
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" wire:model="first_name" >
                            @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" wire:model="last_name" >
                            @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <label>Gender</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="gender" value="male" id="maleRadio" name="gender">
        <label class="form-check-label" for="maleRadio">Male</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="gender" value="female" id="femaleRadio" name="gender">
        <label class="form-check-label" for="femaleRadio">Female</label>
    </div>
<div>
    @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
</div>
     

                        <div class="form-group" style="margin-bottom: 25px;margin-top:25px">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" wire:model="dob" >
                            @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="phone_no">Phone Number</label>
                            <input type="text" class="form-control" wire:model="phone_no" >
                            @error('phone_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" wire:model="address" >
                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="religion">Religion</label>
                            <input type="religion" class="form-control" wire:model="religion" >
                            @error('religion') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="nationality">Nationality</label>
                            <input type="text" class="form-control" wire:model="nationality" >
                            @error('nationality') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="alternate_phone_no">Alternate Phone Number</label>
                            <input type="text" class="form-control" wire:model="alternate_phone_no" >
                            @error('alternate_phone_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="aadhar_no">Aadhar Number</label>
                            <input type="text" class="form-control" wire:model="aadhar_no" >
                            @error('aadhar_no') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <label>Staff Type</label><br>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="staff_type" value="Teaching" id="teachingRadio" name="staff_type">
        <label class="form-check-label" for="maleRadio">Teaching</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="staff_type" value="Non-Teaching" id="nonTeachingradio" name="staff_type">
        <label class="form-check-label" for="femaleRadio">Non-Teaching</label>
    </div>
<div>
    @error('staff_type') <span class="text-danger">{{ $message }}</span> @enderror
</div>

                        <div class="form-group" style="margin-bottom: 25px;margin-top:25px">
                            <label for="profession">Profession</label>
                            <input type="text" class="form-control" wire:model="profession">
                            @error('profession') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="work_experience">Work Experience</label>
                            <input type="text" class="form-control"wire:model="work_experience">
                            @error('work_experience') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" v>
                            <label for="qualification">Qualification</label>
                            <input type="text" class="form-control" wire:model="qualification">
                            @error('qualification') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group" style="margin-bottom: 25px;">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" wire:model="password" >
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group" style="margin-top: 25px;">
                            <label for="remarks">Remarks</label>
                            <input type="text" class="form-control" wire:model="remarks">
                            @error('remarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <!-- Upload Staff Image -->
                        <div class="form-group">
                            <label for="image">Profile Image</label>
                            <input type="file" class="form-control-file" wire:model="image">
                        </div>
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                        @if ($image)
    <img height="50" width="50"src="{{ $image->temporaryUrl() }}" alt="Preview" class="img-preview">
@endif
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