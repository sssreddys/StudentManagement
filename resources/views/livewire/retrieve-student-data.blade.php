<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        /* Style the table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color:indigo;
            color: white;
        }

        /* Style the image */
        .student-image {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
    <h5 style="text-align: center;color:black;font-family:Montserrat"><b>Student Details</b></h5>
    @if (session()->has('std_success'))
        <div class="std-success" style="text-align: center; color: green; padding: 10px; border-radius: 10px; margin: 0 auto; background-color: lightgreen; display: flex; justify-content: center; align-items: center;">
    <b>{{ session('std_success') }}</b>
</div>

        <script>
            setTimeout(function() {
                document.querySelector('.std-success').style.display = 'none';
            }, 5000);
        </script>
        @endif
        <table>
            <thead>
                <tr>
                <th style="text-align: center;font-family:Montserrat">Image</th>
                    <th style="text-align: center;font-family:Montserrat">Student ID</th>
                    <th style="text-align: center;font-family:Montserrat">Name</th>
                    <th style="text-align: center;font-family:Montserrat">Gender</th>
                    <th style="text-align: center;font-family:Montserrat">Date of Birth</th>
                    <th style="text-align: center;font-family:Montserrat">Class</th>
                    <th style="text-align: center;font-family:Montserrat">Mobile</th></th>
                    <th style="text-align: center;font-family:Montserrat">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                <td  style="text-align: center;font-family:Montserrat">
                        <img height="50" width="50" src="{{ asset('storage/' . $student->student_image_path) }}" alt="Student Image" class="student-image">
                    </td>
                    <td style="text-align: center;font-family:Montserrat">{{ $student->std_id }}</td>
                    <td style="text-align: center;font-family:Montserrat">{{ $student->std_first_name }} {{ $student->std_last_name }}</td>
                    <td style="text-align: center;font-family:Montserrat">{{ $student->std_gender }}</td>
                    <td style="text-align: center;font-family:Montserrat">{{ date('d-m-Y', strtotime($student->std_dob)) }}</td>
                    <td style="text-align: center;font-family:Montserrat">{{ $student->class }}</td>
                    <td style="text-align: center;font-family:Montserrat">{{ $student->std_phone_no }}</td>
                    <td style="text-align: center;font-family:Montserrat">
            @if($student->std_status == 'Active')
            <div style="width: 220px;text-align:center;font-family:Montserrat;">
            <button type="button" style="color: white" wire:click="confirmAlertDialog({{$student->std_id}})" class="btn btn-primary">
                Edit
            </button>
            @if ($showAlertDialog)
<div class="modal" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
            <div class="modal-header" style="background-color:blue">
                <h5 style="padding: 10px;color:white" class="modal-title"><b>Confirm Edit</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="cancelAlertDialog">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="margin-left:8px;text-align:start;color: black;">Are you sure,You want to edit this Student Details?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancelAlertDialog">Cancel</button>
                <button class="btn btn-primary" wire:click="edit({{ $student->std_id }})">Edit</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show blurred-backdrop"></div>
@endif
                <button class="btn btn-success">Active</button>
                <button class="btn btn-danger" wire:click="confirmDelete({{ $student->std_id }})">Delete</button>   
                @if ($showModal)
<div class="modal" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
            <div class="modal-header" style="background-color:red">
                <h5 style="padding: 10px;color:white" class="modal-title"><b>Confirm Delete</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="cancelDelete">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="text-align:start;margin-left:8px;color: black;">Are you sure,You want to delete this Student Data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancelDelete">Cancel</button>
                <button type="button" class="btn btn-danger" wire:click="deleteStudent">Yes, Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show blurred-backdrop"></div>
@endif
<style>
    .blurred-backdrop {
    backdrop-filter: blur(5px); /* Adjust the blur intensity as needed */
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value for transparency */
}

</style> 
            </div>
            @else
            <div style="width:220px;text-align:center;font-family:Montserrat;">
            <button class="btn btn-primary" disabled>
              Edit
            </button>
            <button wire:click="confirmDialog({{ $student->std_id }})" class="btn btn-danger">Inactive</button>
                                @if ($showDialog)
<div class="modal" tabindex="-1" role="dialog" style="display: block;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
            <div class="modal-header" style="background-color:green">
                <h5 style="padding: 10px;color:white" class="modal-title"><b>Confirm Active</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="cancelDialog">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="text-align:start;margin-left:8px;color: black;">Are you sure,You want to active this Student Data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancelDialog">Cancel</button>
                <button type="button" class="btn btn-success" wire:click="inactiveToActive">Yes, Active</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show blurred-backdrop"></div>
@endif
<style>
    .blurred-backdrop {
    backdrop-filter: blur(5px); /* Adjust the blur intensity as needed */
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value for transparency */
}

</style>
                <button class="btn btn-danger" disabled>Delete</button>
            </div>
            @endif
        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
</div>