<div>
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session()->has('message'))
                    <div class="alert alert-success" style="text-align: center;">
                        {{ session('message') }}
                        <script>
                            setTimeout(function () {
                                document.querySelector('.alert').style.display = 'none';
                            }, 5000);
                        </script>
                    </div>
                @endif
                <div class="card-header" style="background-color: indigo; color: #fff; text-align: center;">
                    Add Student Marks
                </div>

                <div class="card-body">
                <form wire:submit.prevent="saveStudentMarks" wire:loading.attr="disabled" wire:target="saveStudentMarks">
                        <div class="form-group">
                            <label for="class">Select Class:</label>
                            <select wire:model="class" class="form-control">
                                <option value="">Select Class</option>
                                @foreach ($classes as $cls)
                                    <option value="{{ $cls }}">{{ $cls }}</option>
                                @endforeach
                            </select>
                            @error('class') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="std_id">Select Student ID:</label>
                            <select wire:model="std_id" class="form-control">
                                <option value="">Select Student ID</option>
                                @foreach ($studentIds as $id)
                                    <option value="{{ $id }}">{{ $id }}</option>
                                @endforeach
                            </select>
                            @error('std_id') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="std_name">Select Student Name:</label>
                            <select wire:model="std_name" class="form-control">
                                <option value="">Select Student Name</option>
                                @foreach ($studentNames as $name)
                                    <option value="{{ $name }}">{{ $name }}</option>
                                @endforeach
                            </select>
                            @error('std_name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="english_marks">English Marks:</label>
                            <input type="number" wire:model="englishMarks" class="form-control" value="0">
                            @error('englishMarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="telugu_marks">Telugu Marks:</label>
                            <input type="number" wire:model="teluguMarks" class="form-control" value="0">
                            @error('teluguMarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="maths_marks">Maths Marks:</label>
                            <input type="number" wire:model="mathsMarks" class="form-control" value="0">
                            @error('mathsMarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="science_marks">Science Marks:</label>
                            <input type="number" wire:model="scienceMarks" class="form-control" value="0">
                            @error('scienceMarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="biology_marks">Biology Marks:</label>
                            <input type="number" wire:model="biologyMarks" class="form-control" value="0">
                            @error('biologyMarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="social_marks">Social Marks:</label>
                            <input type="number" wire:model="socialMarks" class="form-control" value="0">
                            @error('socialMarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="computer_marks">Computer Marks:</label>
                            <input type="number" wire:model="computerMarks" class="form-control" value="0">
                            @error('computerMarks') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="total_marks">Total Marks: {{$totalMarks}}/700 </label>
                            <button style="background-color:indigo;color:#fff;border-radius:5px;margin-left:10%" type="button" wire:click="updateTotalMarks"> Calculate Total</button>
                            <div>
                            @error('totalMarks') <span class="text-danger">{{ $message }}</span> @enderror

                            </div>
                            <div>Percentage : {{ number_format($percentage, 2) }}%</div>
                            @error('percentage') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group" style="text-align: center;">
                        <button type="submit" style="background-color:indigo;color:#fff;border-radius:5px;"id="addButton">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('select, input').forEach(function(element) {
        element.addEventListener('change', function() {
            document.getElementById('addButton').click();
        });
    });
</script>
</div>