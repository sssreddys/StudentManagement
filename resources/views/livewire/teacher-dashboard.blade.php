<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Brilliant School</title>

    <!-- Add your CSS and JavaScript dependencies here -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>

        /* Custom CSS for the layout */

 

        /* Navbar styles */

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

 

        /* Search bar styles */

        .form-inline .form-control {

            width: 250px;

             margin-top:20px;

        }

 

        /* Navbar icons styles */

        .navbar-nav .nav-link {

            color: #333;

            font-size: 24px;

            margin-left: 10px;

           

        }

 

        /* Container styles */

        .container {

            margin-top: 20px;

        }

 

        /* Card styles */

        .card {

            margin-bottom: 20px;

        }

 

        .card-header {

            /* background-color:#304194; */

            color: black;

            font-weight: bold;

        }

 

        /* Class Timings styles */

        .card-body ul {

            list-style: none;

            padding-left: 0;

        }

 

        .class-timings {

            background-color: #304194;

            color: #fff;

            font-size:15px;

            padding: 5px 10px;

            border-radius: 5px;

            margin-right: 10px;

        }

 

        .current-day {

            /* background-color: #304194; */

            color: #fff;

            font-size:15px;

            padding: 5px 10px;

            border-radius: 5px;

            margin-right: 10px;

        }

 

        /* Examination Schedule styles */

        .table {

            width: 100%;

        }

 

        .table thead th {

            background-color: #304194;

            color: #fff;

        }

 

        /* Tasks and Assignments styles */

        .tasks-title,

        .task-item,

        .assignment-item {

            /* margin-bottom: 10px; */

        }

 

        /* My Notes Section */

        .notes-card {

            margin-top: 20px;

        }

 

        .notes-card-header {

            height: 60px;

        }

 

        /* Student Marks Section */

        .student-marks-card {

            margin-top: 20px;

            margin-right:30px

        }

 

        .student-marks-card-header {

            height: 60px;

        }

    </style>

</head>

<body>

<div class="container-fluid" style="padding: 0; margin: 0;">

    <!-- Navbar -->

    <nav class="navbar" style="width: 100%;">

        <a class="navbar-brand"  href="/">Brilliant School</a>
        

        <div style="display:flex;flex-direction:row;margin-left:500px"><input class="form-control mr-sm-2" style="height:30px"  type="Search Assignments,Meetings" placeholder="Search Assignments,Meetings" id="search-input">

        <button class="btn btn-outline-light my-2 my-sm-0" ; type="submit" id="search-button">

            <i class="fas fa-search"></i>

        </button>
        
    </div>


       

    <div style="display:flex;flex-direction:row; justify-content:space-between; width:150px;">

    </button>

        <button class="nav-link btn" style="color:white" id="messages-button"><i class="fas fa-envelope"></i>

        <button wire:navigate   class="nav-link btn" style="color:white" id="profile-button">

                <i href="/profile" class="fas fa-user">lkjhgfdsajhgf</i>

    </button>
    <livewire:logout />
    </div>

    </nav>

 

    <!-- <script>

        // JavaScript functionality for the "Profile" button

        document.getElementById("profile-button").addEventListener("click", function () {

            // Replace this with the desired functionality for the "Profile" button

            alert("Profile button clicked. You can add your custom functionality here.");

        });

 

        // JavaScript functionality for the "Messages" button

        document.getElementById("messages-button").addEventListener("click", function () {

            // Replace this with the desired functionality for the "Messages" button

            alert("Messages button clicked. You can add your custom functionality here.");

        });

    </script> -->

 

    <div class="container">
    <a href="/teacher-report">
                                 <button class="btn btn-primary" style="background-color: #0E1264; margin-top: 15px; padding: 5px 5px; border: none; border-radius: 5px; color: #fff; font-size: 13px; width: 120px; cursor: pointer; margin:10px;">
                                     Add Marks
                                 </button>
                             </a>

        <div class="row">

            <div class="col-md-4">

                <div class="card">

                    <div class="card-header">Class Timings</div>

                    <div class="card-body">

                        <!-- Display class timings here -->

                        <ul>

                            <li><span class="class-timings">Monday: 9:00 AM - 11:00 AM</span></li>

                                    <p style="color: black; font-family: sans-serif; margin-top:5px;font-size:14px;margin-top:10px">Area of Rectangle</p>

                            <li style="margin-top: 20px;"><span class="class-timings current-day">Tuesday: 10:00 AM -

                                    12:00 PM</span> <p style="color: black; font-family: sans-serif;font-size:14px;margin-top:10px">Trignometry</p>

                            </li>

                            <li style="margin-top: 20px;"><span class="class-timings current-day">Tuesday: 10:00 AM -

                                    12:00 PM</span> <p style="color: black; font-family: sans-serif ;font-size:14px;margin-top:10px">

                                    Algebra Expressions </p></li>

                                   

                            <!-- Add more class timings -->

                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-md-5">

                <div class="card">

                    <div class="card-header">Examination Schedule</div>

                    <div class="card-body">

                        <!-- Display examination schedule here -->

                        <table class="table">

                            <thead>

                                <tr>

                                    <th>Exam</th>

                                    <th>Date</th>

                                    <th>Time</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td style="font-size:14px">Math Final</td>

                                    <td style="font-size:14px">15-12-2023</td>

                                    <td style="font-size:14px">10:00 AM - 12:00 PM</td>

                                </tr>

                                <tr>

                                    <td style="font-size:14px">Science Midterm</td>

                                    <td style="font-size:14px">20-12-2023</td>

                                    <td style="font-size:14px">2:00 PM - 4:00 PM</td>

                                </tr>

                                <tr>

                                    <td style="font-size:14px">Social UnitTest</td>

                                    <td style="font-size:14px">23-12-2023</td>

                                    <td style="font-size:14px">10:00 AM - 12:00 PM</td>

                                </tr>

                                <!-- Add more exams -->

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        <div class="col-md-3" style="margin-top:20px;">

            <div class="card">

                <div class="card-header assignments-title" style="padding-left:20px">Assignments</div>

                <div class="card-body">

                    <!-- Display assignments here -->

                    <ul>

                        <li class="assignment-item" style="text-decoration: underline; color: silver"><p

                                style="color: black; font-size: 13px;">Write an essay on Shakespeare's works</p></li>

                        <li class="assignment-item" style="text-decoration: underline; color: silver"><p

                                style="color: black; font-size: 13px;">Submit your science project proposal</p></li>

                        <li class="assignment-item" style="text-decoration: underline; color: silver"><p

                                style="color: black; font-size: 13px;">Perimeter & Area of Rectangle</p></li>

                        <!-- Add more assignments -->

                    </ul>

                </div>

            </div>

        </div>

        </div>

   

        <div class="container" style="width: 100%; padding: 0; margin: 0;">

    <div class="row" style="padding-left: 20px;">

        <!-- My Notes Section -->

        <div class="col-md-3">

            <div class="card notes-card">

                <div class="card-header assignments-title" style="height: 60px;">My Notes</div>

                <div class="card-body">

                    <!-- Button to add notes -->

                    <button class="btn btn-primary" style="height: 30px;" data-toggle="modal"

                        data-target="#addNotesModal"><p style="font-size: 11px">Add Notes</p></button>

 

                    <!-- Row for document icons and teacher notes -->

                    <div class="row" style="margin-top: 5px">

                        <div class="col-md-8" style="margin-top: 5px">

                            <!-- Teacher notes content -->

                            <b style="font-size: 13px; margin-top: 5px; width: 270px;">Prepare Questions</b>

                            <p style="font-size: 13px; margin-top: 5px; width: 250px">prepare questions  Unit Test

                                of Class B</p>

                            <b style="font-size: 13px; margin-top: 10px; width: 280px">Annoucements </b>

                            <p style="font-size: 13px; margin-top: 5px; width: 250px">Important updates to class A

                            </p>

                            <b style="font-size: 13px; margin-top: 5px; width: 250px; margin-left: 50px">View Notes</b>

                        </div>

                    </div>

                </div>

            </div>

        </div>

 

        <!-- Student Marks Section -->
      
        <div class="col-md-9">

            <div class="card student-marks-card">

                <div class="card-header assignments-title">Student Marks</div>
                

                <div class="card-body">

                    <!-- Table for student marks -->

                    <table class="table">

                        <thead>

                            <tr>

                            <th>Roll No</th>

                                <th>Student Name</th>

                                <th>Class</th>

                                <th>Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>CFST-ID-001</td>

                                <td>Archana Goud</td>

                                <td>X</td>

                                <td>

                                    <div style="display:flex; flex-direction:row; gap:5px;">

                                    <button  style="background-color:#0E1264; border-radius:5px;color:white;border-color:silver; padding:3px; ">Edit</button>

                                    <button style="background-color:#0F8405; border-radius:5px;color:white;margin-left:20px;border-color:silver;">Report</button>

                                    </div>

                                </td>

                               

                            </tr>

                            <tr>

                            <td>CFST-ID-002</td>

                                <td>Ruchitha</td>

                                <td>X</td>

                                <td>

                                <div style="display:flex; flex-direction:row; gap:5px;">

                                    <button style="background-color:#0E1264; border-radius:5px;color:white;border-color:silver; padding:3px; ">Edit</button>

                                    <button style="background-color:#0F8405; border-radius:5px;color:white;margin-left:20px;border-color:silver;">Report</button>

                                    </div>

                                </td>

                            </tr>

                            <tr>

                            <td>CFST-ID-003</td>

                                <td>Bhavya Reddy</td>

                                <td>X</td>

                                <td>

                                <div style="display:flex; flex-direction:row; gap:5px;">

                                    <button style="background-color:#0E1264; border-radius:5px;color:white;border-color:silver; padding:3px; ">Edit</button>

                                    <button style="background-color:#0F8405; border-radius:5px;color:white;margin-left:20px;border-color:silver;">Report</button>

                                    </div>

                                </td>

                            </tr>

                            <tr>

                            <td>CFST-ID-004</td>

                                <td>Anushetty </td>

                                <td>X</td>

                                <td>

                                <div style="display:flex; flex-direction:row; gap:5px;">

                                    <button style="background-color:#0E1264; border-radius:5px;color:white;border-color:silver; padding:3px; ">Edit</button>

                                    <button style="background-color:#0F8405; border-radius:5px;color:white;margin-left:20px;border-color:silver;">Report</button>

                                    </div>

                                </td>

                            </tr>

                            <tr>

                            <td>CFST-ID-005</td>

                                <td>Sindhu </td>

                                <td>X</td>

                                <td>

                                <div style="display:flex; flex-direction:row; gap:5px;">

                                    <button style="background-color:#0E1264; border-radius:5px;color:white;border-color:silver; padding:3px; ">Edit</button>

                                    <button style="background-color:#0F8405; border-radius:5px;color:white;margin-left:20px;border-color:silver;">Report</button>

                                    </div>

                                </td>

                            </tr>

                            <!-- Add more student rows as needed -->

 

                        </tbody>

                       

                    </table>

                    <button style="background-color:grey; border-radius:5px;color:white;margin-left:10px;border-color:silver;">View all</button>

                </div>

            </div>

        </div>

    </div>

</div>

 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.min.js"

    integrity="sha384-rvf8I4GakfL2Ff6anQ3DwFJw9gcy4Cp5Ft6SA5n3zLhh5Iz5n5r5O5F5f5Q3d3O3"

    crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>

 

</div>

 

 