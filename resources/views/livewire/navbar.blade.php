<html>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
    <h2 style="margin-left: 28%;"><a href="/" style="color:white">School Management System</a></h2>
    <ul class="navbar-nav ml-auto mr-5">
        @guest
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="loginDropdown">
                        <a class="dropdown-item" href="/StudentLogin">Student Login</a>
                        <a class="dropdown-item" href="/StaffLogin">Staff Login</a>
                        <a class="dropdown-item" href="/AdminLogin">Admin Login</a>
                    </div>
                </li>
            </ul>
    </nav>

    <!-- Include Bootstrap JavaScript and jQuery (required for dropdown) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

            <li class="nav-item" style="margin-top: 8px;">
                <a href="/register" class="nav-link  rounded-0 btn {{request()->is('register')?'btn-light text-dark':''}}">Register</a>
            </li>
        @else
            
            <li class="nav-item ml-5 ">
                <p class="text-white font-weight-bold mt-2">Welcome !
                    <span class="avatar-circle" style="cursor: pointer;" wire:click="$emit('openUserProfileModal', {{ auth()->user()->id }})">
                        {{ substr(ucfirst(auth()->user()->name), 0, 1) }}
                    </span>
                    <span class="text-warning">
                        {{ ucfirst(auth()->user()->name) }}
                    </span> 
                </p>
            </li>   
            <li class="nav-item ml-5">
                <livewire:logout />
            </li>  
</div>
        </div>        
    <livewire:scripts />
        @endguest
    </ul>
</nav>
</html>
<div>
<html>    
  <nav class="bg-slate-700 text-white">
    <div class="flex" style="display: flex; justify-content: space-between;">
    @guest
    <div></div>
        @else
        <a style="color: white; font-family: sans-serif;" href="/StudentRegistration" class="nav-link">Student Registration</a>
        <a style="color: white; font-family: sans-serif;" href="/RetrieveStudentData" class="nav-link">Student Details</a>
        <a style="color: white; font-family: sans-serif;" href="/AddStudentMarks" class="nav-link">Add Students Marks</a>
        <a style="color: white; font-family: sans-serif;" href="/StudentMarksDetails" class="nav-link">Student Marks Details</a>
        <a style="color: white; font-family: sans-serif;" href="/StaffRegistration" class="nav-link">Staff Registration</a>
        <a style="color: white; font-family: sans-serif;" href="/RetrieveStaffData" class="nav-link">Staff Details</a>
        @endguest
    </div>
</nav>
</html>

<div >
@livewireScripts
<style>
    .flex {
        background-color: black;
        padding: 10px;
    }

    .nav-link {
        padding:5px;
        /* Adjust padding as needed */
        text-decoration: none;
        transition: background-color 0.3s ease;
        border-radius: 5px;
    }

    .nav-link:hover {
        background-color: purple;
    }


    .nav-link:active {
        background-color: indigo;
    }

</style>
    <livewire:scripts />
    </ul>
</nav>
