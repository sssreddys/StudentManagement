<div>
<div class="container mt-4">
        <h5 style="text-align: center;"><b>Student Marks Details Table</b></h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Teacher ID</th>
                    <th>Class</th>
                    <th>English</th>
                    <th>Hindi</th>
                    <th>Telugu</th>
                    <th>Maths</th>
                    <th>Science</th>
                    <th>Biology</th>
                    <th>Social</th>
                    <th>Computer</th>
                    <th>Total Marks</th>
                </tr>
            </thead>
            <tbody>
                @foreach($studentMarks as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->teacher_id }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->english_marks }}</td>
                    <td>{{ $student->hindi_marks }}</td>
                    <td>{{ $student->telugu_marks }}</td>
                    <td>{{ $student->maths_marks }}</td>
                    <td>{{ $student->science_marks }}</td>
                    <td>{{ $student->biology_marks }}</td>
                    <td>{{ $student->social_marks }}</td>
                    <td>{{ $student->computer_marks }}</td>
                    <td>{{ $student->total_marks }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <style>
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
</div>
