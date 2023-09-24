<div>
    <div class="container" style="margin-top: 50px; margin-right: 13%;display:flex">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form wire:submit.prevent="saveAllStudents" wire:loading.attr="disabled" wire:target="saveAllStudents">
                    <table class="table table-bordered">
                        <h5 style="text-align: center; color: black; font-family: Montserrat"><b>ADD Student Marks</b></h5>
                        <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                            <select wire:model="class" class="form-control" style="width: 150px;">
                                <option value="">Select Class</option>
                                @foreach ($classes as $cls)
                                <option value="{{ $cls }}">{{ $cls }}</option>
                                @endforeach
                            </select>

                            @if (session()->has('message'))
                            <div class="std-success" style="width: 500px; text-align: center; color: green; padding: 10px; border-radius: 10px; background-color: lightgreen; margin-right: 5%">
                                <b>{{ session('message') }}</b>
                            </div>
                            <script>
                                setTimeout(function() {
                                    console.log("Hiding message");
                                    document.querySelector('.std-success').style.display = 'none';
                                }, 5000);
                            </script>
                            @endif
                            <button type="button" wire:click="addStudentRow" style="background-color: indigo; color: #fff; border-radius: 5px;">Add Student</button>
                        </div>
                        <thead>
                            <tr style="background-color: indigo; color: white">
                                <th style="text-align: center;">Student ID</th>
                                <th style="text-align: center;">Student Name</th>
                                <th style="text-align: center;">English Marks</th>
                                <th style="text-align: center;">Telugu Marks</th>
                                <th style="text-align: center;">Maths Marks</th>
                                <th style="text-align: center;">Science Marks</th>
                                <th style="text-align: center;">Biology Marks</th>
                                <th style="text-align: center;">Social Marks</th>
                                <th style="text-align: center;">Computer Marks</th>
                                <th style="text-align: center;">Calculate</th>
                                <th style="text-align: center;">Total Marks</th>
                                <th style="text-align: center;">Percentage</th>
                                <th style="text-align: center;">Result</th>
                                <th style="text-align: center;">Save Marks</th>
                            </tr>
                        </thead>
                        @foreach ($studentsData as $index => $studentData)
                        <tbody>
                            <div style="align-items: start; display: flex; justify-content: start; flex-direction: column;">
                                @error('class')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.studentIds')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.studentNames')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.englishMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.teluguMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.mathsMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.scienceMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.biologyMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.socialMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.computerMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.totalMarks')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.percentage')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                @error('studentsData.' . $index . '.result')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <tr>
                                    <td style="text-align: center;">
                                        <div class="form-group" style="width: 70px;">
                                            <input type="text" wire:model="studentsData.{{ $index }}.studentIds" class="form-control" readonly>
                                        </div>
                                    </td>

                                    <td style="text-align: center;">
                                        <div class="form-group" style="width: 110px;">
                                            <input type="text" wire:model="studentsData.{{ $index }}.studentNames" class="form-control" readonly>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group" style="width: 60px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.englishMarks" id="studentsData_{{ $index }}_englishMarks" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group" style="width: 60px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.teluguMarks" id="studentsData_{{ $index }}_teluguMarks" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group" style="width: 60px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.mathsMarks" id="studentsData_{{ $index }}_mathsMarks" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group" style="width: 60px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.scienceMarks" id="studentsData_{{ $index }}_scienceMarks" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group" style="width: 60px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.biologyMarks" id="studentsData_{{ $index }}_biologyMarks" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group" style="width: 60px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.socialMarks" id="studentsData_{{ $index }}_socialMarks" class="form-control">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group" style="width: 60px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.computerMarks" id="studentsData_{{ $index }}_computerMarks" class="form-control">
                                        </div>
                                    </td>
                                    <td style="text-align: center">
                                        <button style="background-color: black; color: white; border-radius: 5px" type="button" wire:click="calculateTotal({{ $index }})">Total</button>
                                    </td>

                                    <td>
                                        <div class="form-group" style="width: 66px;">
                                            <input type="number" wire:model="studentsData.{{ $index }}.totalMarks" class="form-control" readonly>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group" style="width: 78px;">
                                            <input type="text" wire:model="studentsData.{{ $index }}.percentage" class="form-control" readonly>
                                        </div>
                                    </td>

                                    <td>
                                    <div class="form-group" style="width: 56px;">
                                        <input type="text" wire:model="studentsData.{{ $index }}.result" class="form-control" readonly>
                                    </div>
                                    </td>

                                    <td style="text-align: center">
                                        <button type="button" wire:click="saveStudentMarks({{ $index }})" wire:loading.attr="disabled" class="btn btn-primary">Save</button>
                                    </td>
                                </tr>
                            </div>
                        </tbody>
                        @endforeach
                    </table>
                    @if(count($studentsData) > 0)
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Save All</button>
                    </div>
                    @else
                    <div style="text-align: center; background-color: #f0f0f0; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        <strong>NOTE:</strong> Please select the class, then click on the <strong>Add Student</strong> button from the right side.
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
