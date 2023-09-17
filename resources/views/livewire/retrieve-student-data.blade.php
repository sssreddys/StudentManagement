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
    <h5 style="text-align: center;color:black"><b>Student Details</b></h5>
        <table>
            <thead>
                <tr>
                <th style="text-align: center;">Image</th>
                    <th style="text-align: center;">Student ID</th>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Gender</th>
                    <th style="text-align: center;">Date of Birth</th>
                    <th style="text-align: center;">Class</th>
                    <th style="text-align: center;">Mobile</th></th>
                    <th style="text-align: center;">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                <td  style="text-align: center;">
                        <img height="50" width="50" src="{{ asset('storage/' . $student->student_image_path) }}" alt="Student Image" class="student-image">
                    </td>
                    <td style="text-align: center;">{{ $student->std_id }}</td>
                    <td style="text-align: center;">{{ $student->std_first_name }} {{ $student->std_last_name }}</td>
                    <td style="text-align: center;">{{ $student->std_gender }}</td>
                    <td style="text-align: center;">{{ $student->std_dob }}</td>
                    <td style="text-align: center;">{{ $student->class }}</td>
                    <td style="text-align: center;">{{ $student->std_phone_no }}</td>
                    <td style="text-align: center;"><button style="background-color: blue;border-radius:5px;"><a style="color:white" href="/EditStudentDetails/{{ $student->std_id }}">Edit</a></button>
                    @if($student->std_id)
    <button class="btn btn-success">Active</button>
@else
    <button class="btn btn-danger">Inactive</button>
@endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
