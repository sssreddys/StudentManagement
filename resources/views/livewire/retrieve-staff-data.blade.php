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
                <tr >
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
            <button class="btn btn-primary">
                <a style="color: white" href="/EditStaffDetails/{{ $staff->staff_id }}">Edit</a>
            </button>
                <button class="btn btn-success">Active</button>
                <button class="btn btn-danger" wire:click="deleteStaff({{ $staff->staff_id }})">Delete</button>
            </div>

            @else
            <div style="width: 220px;text-align:center;font-family:Montserrat;">
            <button class="btn btn-primary" disabled>
              Edit
            </button>
                <button class="btn btn-danger">Inactive</button>
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