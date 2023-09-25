<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags, CSS links, and Livewire styles -->
    <!-- Ensure Livewire scripts and styles are correctly loaded -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livewire</title>
    <livewire:styles/>
</head>
<style>
  
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&display=swap');

    *{
        font-family: 'Montserrat', sans-serif;
    }
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

    
    /* Make the table responsive */
    .table-responsive {
        width: 100%;
        overflow-x: auto;
    }

</style>
<body>


<nav class="navbar" style="width: 100%;">

<a class="navbar-brand"  href="/teacher-dashboard">Brilliant School</a>

<div style="display:flex;flex-direction:row; justify-content:space-between; width:150px;">

<button class="nav-link btn" style="color: white;" id="notifications-button">

<i class="fas fa-bell"></i>

</button>

<button class="nav-link btn" style="color:white" id="messages-button"><i class="fas fa-envelope"></i>

<button wire:navigate href="/profile/{1}" class="nav-link btn" style="color:white" id="profile-button">

        <i class="fas fa-user"></i>

    </button>

</div>

</nav>

<div>
    <div class="container" style="margin-top: 50px;display:flex;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form wire:submit.prevent="editAllStudentMarks" wire:loading.attr="disabled" wire:target="saveAllStudents">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <h5 style="text-align: center; color: black; font-family: Montserrat"><b>Edit Student Marks</b></h5>
                            <div class="form-group" style="display: flex; align-items: center;">
                            <select wire:model="class" wire:change="addStudentRow" class="form-control" style="width: 150px; font-size: 10px;">
                                <option style="font-size: 10px;" value="">Select Class</option>
                                @foreach ($classes as $cls)
                                <option  style="font-size: 10px;" value="{{ $cls }}">{{ $cls }}</option>
                                @endforeach
                            </select>
                            @error('class')
                            <div class="text-danger" style="font-size: 10px; padding-left: 10px;">{{ $message }}</div>
                            @enderror
                        </div>
                        @if (session()->has('message'))
                            <div class="std-success" style="width: 100%; text-align: center; color: green; padding: 10px; border-radius: 10px; background-color: lightgreen; margin-top: 5px;">
                                <b>{{ session('message') }}</b>
                            </div>
                            <script>
                                setTimeout(function() {
                                    console.log("Hiding message");
                                    document.querySelector('.std-success').style.display = 'none';
                                }, 5000);
                            </script>
                        @endif
                            <thead>
                                <tr style="background-color: #0E128A; color: white">
                                    <th  style="text-align: center;font-size: 10px;">S.No</th>
                                    <th  style="text-align: center;font-size: 10px;">Student ID</th>
                                    <th  style="text-align: center;font-size: 10px;">Student Name</th>
                                    <th  style="text-align: center;font-size: 10px;">English Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Telugu Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Maths Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Science Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Biology Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Social Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Computer Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Calculate</th>
                                    <th  style="text-align: center;font-size: 10px;">Total Marks</th>
                                    <th  style="text-align: center;font-size: 10px;">Percentage</th>
                                    <th  style="text-align: center;font-size: 10px;">Result</th>
                                    <th  style="text-align: center;font-size: 10px;">Edit Marks</th>
                                </tr>
                            </thead>
                            @foreach ($studentsData as $index => $studentData)
                            <tbody>
                                <div style="align-items: start; display: flex; justify-content: start; flex-direction: column;">
                                    @error('class')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.studentIds')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.studentNames')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.englishMarks')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.teluguMarks')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.mathsMarks')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.scienceMarks')
                                    <span style="font-size: 10px;"  class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.biologyMarks')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.socialMarks')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.computerMarks')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.totalMarks')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.percentage')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    @error('studentsData.' . $index . '.result')
                                    <span style="font-size: 10px;" class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <tr>
                                        <td  style="text-align: center;font-size: 10px;">{{ $studentData['serialNo'] }}</td>
                                        <td   style="text-align: center;">
                                            <div class="form-group" style="width: 48px;">
                                                <input style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.studentIds" class="form-control"readonly >
                                            </div>
                                        </td>
                                        <td  style="text-align: center;">
                                            <div class="form-group" style="width: 92px;">
                                                <input style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.studentNames" class="form-control" readonly>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 44px;">
                                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);" style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.englishMarks" id="studentsData_{{ $index }}_englishMarks" wire:key="englishMarks_{{ $index }}" class="form-control" wire:ignore>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 44px;">
                                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);" style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.teluguMarks" id="studentsData_{{ $index }}_teluguMarks" class="form-control" wire:ignore>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 44px;">
                                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);" style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.mathsMarks" id="studentsData_{{ $index }}_mathsMarks" class="form-control">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 44px;">
                                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);" style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.scienceMarks" id="studentsData_{{ $index }}_scienceMarks" class="form-control">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 44px;">
                                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);" style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.biologyMarks" id="studentsData_{{ $index }}_biologyMarks" class="form-control">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 44px;">
                                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);" style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.socialMarks" id="studentsData_{{ $index }}_socialMarks" class="form-control">
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 44px;">
                                                <input  oninput="this.value = this.value.replace(/[^0-9]/g, '').substring(0, 3);" style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.computerMarks" id="studentsData_{{ $index }}_computerMarks" class="form-control">
                                            </div>
                                        </td>
                                        <td  style="text-align: center">
                                            <button style="background-color:green;color: white; border-radius: 5px;font-size: 10px;" type="button" wire:click="calculateTotal({{ $index }})">Total</button>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 55px;">
                                                <input style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.totalMarks" class="form-control" readonly>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 60px;">
                                                <input style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.percentage" class="form-control" readonly>
                                            </div>
                                        </td>
                                        <td >
                                            <div class="form-group" style="width: 50px;">
                                                <input style="font-size: 10px;" type="text" wire:model="studentsData.{{ $index }}.result" class="form-control" readonly>
                                            </div>
                                        </td>
                                        <td  style="text-align: center">
                                            <button style="font-size: 10px;" type="button" wire:click="editStudentMarks({{ $index }})" class="btn btn-primary">Edit</button>
                                        </td>
                                    </tr>
                                </div>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                    @if(count($studentsData) > 0)
                    <div  style="text-align: center;">
                        <button style="font-size: 10px;" type="button"  type="button" wire:click="editAllStudentMarks" class="btn btn-primary">Edit All</button>
                    </div>
                    @else
                    <div  style="text-align: center; font-size: 10px;background-color: #f0f0f0; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                        <strong>NOTE:</strong> Please select a class before you can edit student marks.
                    </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
</div>
