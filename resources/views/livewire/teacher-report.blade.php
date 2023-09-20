<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, CSS links, and Livewire styles -->
    <!-- Ensure Livewire scripts and styles are correctly loaded -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <title>livewire</title>
    <livewire:styles/>
</head>
<style>
  
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap');

    *{
        font-family: 'Montserrat', sans-serif;
    }
    .navbar {

background-color: #0E1264;

width: 100%;

}



.navbar-brand {

color: white;

font-weight: bold;

font-size: 20px;

margin-left: 70px;

}



.navbar-toggler-icon {

color: #fff;

}


</style>
<body>


<nav class="navbar" style="width: 100%;">

<a class="navbar-brand"  href="/teacher-dashboard">Brilliant School</a>

<div style="display:flex;flex-direction:row; justify-content:space-between; width:150px;">

<button class="nav-link btn" style="color: white;" id="notifications-button">

<i class="fas fa-bell"></i>

</button>

<button class="nav-link btn" style="color:white" id="messages-button"><i class="fas fa-envelope"></i>

<button wire:navigate href="/profile/{1}" class="nav-link btn" style="color:white" id="profile-button">

        <i class="fas fa-user"></i>

    </button>

</div>

</nav>
<div class="card-body mx-auto text-center" style="background: #F8F8FF; width: 40%; display: flex; flex-direction: column; border: 1px solid #DCDCDC; border-radius: 10px; margin:5px;">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h3 class="text-center mb-5" style="font-weight:600;">Student Marks Entry Form</h3>
    <form style="font-size: 12px;" wire:submit.prevent="addMarks">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="student_id" class="form-control form-control-lg" placeholder="Student Id Number" style="font-size: 12px;" required />
                    <!-- Add validation error display here -->
                    <span class="input-group-text" style="background: transparent; border: none; padding: 0; position: absolute; top: 0; right: 0; bottom: 0; margin-right:5px; display: flex; align-items: center; justify-content: center; color:#808080; font-size:14px;"><i class="fa-solid fa-user"></i></span>
                </div>
                @error('student_id') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="teacher_id" class="form-control form-control-lg" placeholder="Teacher Id Number" style="font-size: 12px;" required />
                    <!-- Add validation error display here -->
                    <span class="input-group-text" style="background: transparent; border: none; padding: 0; position: absolute; top: 0; right: 0; bottom: 0; margin-right:5px; display: flex; align-items: center; justify-content: center; color:#808080; font-size:14px;"><i class="fa-solid fa-user"></i></span>
                </div>
                @error('teacher_id') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="text" wire:model="student_name" class="form-control form-control-lg" placeholder="Student Name " style="font-size: 12px;" required />
                    <!-- Add validation error display here -->
                    <span class="input-group-text" style="background: transparent; border: none; padding: 0; position: absolute; top: 0; right: 0; bottom: 0; margin-right:5px; display: flex; align-items: center; justify-content: center; color:#808080; font-size:14px;"><i class="fa-solid fa-user"></i></span>
                </div>
                @error('student_name') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="text" wire:model="class" class="form-control form-control-lg" placeholder="Class Here " style="font-size: 12px;" required />
                </div>
                @error('class') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <select wire:model="selected_exam" class="form-select form-control-lg" style="font-size: 12px;" required>
                        <option value=""  selected>Select Exam</option>
                        <option value="term_1">Term 1</option>
                        <option value="term_2">Term 2</option>
                        <!-- Add other options as needed -->
                    </select>
                    <!-- Add validation error display here for selected_exam -->
                </div>
                @error('selected_exam') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <!-- Subject Input Fields -->
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="telugu_marks" class="form-control form-control-lg" placeholder="Telugu Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for telugu -->
                @error('telugu_marks') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="english_marks" class="form-control form-control-lg" placeholder="English Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for english -->
                @error('english_marks') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="maths_marks" class="form-control form-control-lg" placeholder="Maths Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for english -->
                @error('maths_marks') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="science_marks" class="form-control form-control-lg" placeholder="Science Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for english -->
                @error('science_marks') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="social_marks" class="form-control form-control-lg" placeholder="Social Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for english -->
                @error('social_marks') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="hindi_marks" class="form-control form-control-lg" placeholder="Hindhi Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for hindhi -->
                @error('hindhi') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="computer_marks" class="form-control form-control-lg" placeholder="Computer Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for biology -->
                @error('computer_marks') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-12 mb-4">
                <div class="input-group">
                    <input type="number" wire:model="biology_marks" class="form-control form-control-lg" placeholder="Biology Marks" style="font-size: 12px;" />
                </div>
                <!-- Add validation error display here for biology -->
                @error('biology_marks') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-12 d-grid">
                <button type="submit" class="btn " style="height: 35px; line-height: 25px; padding: 0; background:#0E1264 ;border:none;color:white; width:150px;">Submit</button>
            </div>

            @if (session()->has('message'))
                <script>
                    Swal.fire({
                        title: 'Success!',
                        text: '{{ session('message') }}',
                        icon: 'success',
                        confirmButtonText: 'OK',
                    }).then(() => {
                        // Optionally, you can close the modal or perform other actions here
                    });
                </script>
            @endif
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>




</script>

    @livewireScripts
    @yield('script')
    </body>
    </html>
