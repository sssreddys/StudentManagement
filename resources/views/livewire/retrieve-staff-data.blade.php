<div>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Staff Information</title>
        <style>
            /* Style the table */
            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 10px;
                text-align: left;
                border: 1px solid #ddd;
            }

            th {
                background-color: indigo;
                color: white;
            }

            /* Style the image */
            .staff-image {
                max-width: 100px;
                max-height: 100px;
            }
        </style>
    </head>

    <body>
        <div class="container" style="margin-top:20px">
            <h5 style="text-align: center;color:black;font-family:Montserrat"><b>Staff Details</b></h5>
            @if (session()->has('stf_success'))
            <div class="std-success" style="text-align: center; color: green; padding: 10px; border-radius: 10px; margin: 0 auto; background-color: lightgreen; display: flex; justify-content: center; align-items: center;">
                <b>{{ session('stf_success') }}</b>
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
                        <th style="text-align: center;font-family:Montserrat">Staff ID</th>
                        <th style="text-align: center;font-family:Montserrat">Name</th>
                        <th style="text-align: center;font-family:Montserrat">Gender</th>
                        <th style="text-align: center;font-family:Montserrat">Date of Birth</th>
                        <th style="text-align: center;font-family:Montserrat">Phone Number</th>
                        <th style="text-align: center;font-family:Montserrat">Email</th>
                        <th style="text-align: center;font-family:Montserrat">Staff Type</th>
                        <th style="text-align: center;font-family:Montserrat">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($staffs as $staff)
                    <tr>
                        <td style="text-align: center;font-family:Montserrat">
                            <img src="{{ asset('storage/' . $staff->image_path) }}" alt="Staff Image" height="50" width="50" class="staff-image">
                        </td>
                        <td style="text-align: center;font-family:Montserrat">{{ $staff->staff_id }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $staff->first_name }} {{ $staff->last_name }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $staff->gender }}</td>
                        <td style="text-align: center;font-family:Montserrat;width:200px">{{ date('d-m-Y', strtotime($staff->dob)) }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $staff->phone_no }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $staff->email }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $staff->staff_type }}</td>
                        <td style="text-align: center;font-family:Montserrat">
                            @if($staff->staff_status == 'Active')
                            <div style="width:220px;text-align:center;font-family:Montserrat;">
                                <button style="color: white" class="btn btn-primary" wire:click="confirmAlertDialog({{$staff->staff_id}})">
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
                <p style="text-align:start;margin-left:8px;color: black;">Are you sure,You want to edit this Staff Details?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancelAlertDialog">Cancel</button>
                <button type="button" wire:click="edit({{$staff->staff_id}})" class="btn btn-primary">Yes, Edit</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show blurred-backdrop"></div>
@endif
                                <button class="btn btn-success">Active</button>
                                <button class="btn btn-danger" wire:click="confirmDelete({{ $staff->staff_id }})">Delete</button>
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
                <p style="text-align:start;margin-left:8px;color: black;">Are you sure,You want to delete this Staff Data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" wire:click="cancelDelete">Cancel</button>
                <button type="button" class="btn btn-danger" wire:click="deleteStaff">Yes, Delete</button>
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
                            <div style="width: 220px;text-align:center;font-family:Montserrat;">
                                <button class="btn btn-primary" disabled>
                                    Edit
                                </button>
                                <button wire:click="confirmDialog({{ $staff->staff_id }})" class="btn btn-danger">Inactive</button>
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
                <p style="text-align:start;margin-left:8px;color: black;">Are you sure,You want to active this Staff Data?</p>
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