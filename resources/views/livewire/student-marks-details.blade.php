<!-- resources/views/livewire/student-marks-details.blade.php -->

<div wire:key="unique-key">
    <div class="container" style="margin-top: 50px;">
        <h5 style="text-align: center; color: black; font-family: Montserrat"><b>Student Marks Details</b></h5>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                    <select wire:model="class" wire:change="loadStudentData" class="form-control" style="width: 150px;">
                        <option value="">Select Class</option>
                        @foreach ($classes as $cls)
                            <option value="{{ $cls }}">{{ $cls }}</option>
                        @endforeach
                    </select>
                </div>
                
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: indigo; color: white">
                            <th style="text-align: center;">S.No</th>
                            <th style="text-align: center;">Student ID</th>
                            <th style="text-align: center;">Student Name</th>
                            <th style="text-align: center;">English Marks</th>
                            <th style="text-align: center;">Telugu Marks</th>
                            <th style="text-align: center;">Maths Marks</th>
                            <th style="text-align: center;">Science Marks</th>
                            <th style="text-align: center;">Biology Marks</th>
                            <th style="text-align: center;">Social Marks</th>
                            <th style="text-align: center;">Computer Marks</th>
                            <th style="text-align: center;">Total Marks</th>
                            <th style="text-align: center;">Percentage</th>
                            <th style="text-align: center;">Result</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentsData as $student)
                            <tr>
                                <td style="text-align: center;">{{ $student['serialNo'] }}</td>
                                <td style="text-align: center;">{{ $student['studentIds'] }}</td>
                                <td style="text-align: center;">{{ $student['studentNames'] }}</td>
                                <td style="text-align: center;">{{ $student['englishMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['teluguMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['mathsMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['scienceMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['biologyMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['socialMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['computerMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['totalMarks'] }}</td>
                                <td style="text-align: center;">{{ $student['percentage'] }}</td>


                                <td style="text-align: center;">
                                    <div>
                                        @if($student['result']== 'Pass')
                                            <button style="background-color: green; border-radius: 5px; color: white">{{ $student['result'] }}</button>
                                        @else
                                            <button style="background-color: red; border-radius: 5px; color: white">{{ $student['result'] }}</button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
