<div>
    <div class="container mt-4">
        <h5 style="text-align: center;margin-left:8%;font-family:Montserrat"><b>Student Marks Details Table</b></h5>
        @if(count($studentMarks) > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;font-family:Montserrat">Student ID</th>
                        <th style="text-align: center;font-family:Montserrat">Student Name</th>
                        <th style="text-align: center;font-family:Montserrat">Teacher ID</th>
                        <th style="text-align: center;font-family:Montserrat">Class</th>
                        <th style="text-align: center;font-family:Montserrat">English</th>
                        <th style="text-align: center;font-family:Montserrat">Hindi</th>
                        <th style="text-align: center;font-family:Montserrat">Telugu</th>
                        <th style="text-align: center;font-family:Montserrat">Maths</th>
                        <th style="text-align: center;font-family:Montserrat">Science</th>
                        <th style="text-align: center;font-family:Montserrat">Biology</th>
                        <th style="text-align: center;font-family:Montserrat">Social</th>
                        <th style="text-align: center;font-family:Montserrat">Computer</th>
                        <th style="text-align: center;font-family:Montserrat">Total Marks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($studentMarks as $student)
                    <tr>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->student_id }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->student_name }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->teacher_id }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->class }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->english_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->hindi_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->telugu_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->maths_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->science_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->biology_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->social_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->computer_marks }}</td>
                        <td style="text-align: center;font-family:Montserrat">{{ $student->total_marks }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p style="text-align: center;margin-left:8%;font-family:Montserrat">No records found.</p>
        @endif
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
            background-color: indigo;
            color: white;
        }

        /* Style the image */
        .student-image {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</div>
