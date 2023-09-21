<style>
/* CSS for Teacher Profile */
.profile-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
}

.profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
}

.profile-header h2 {
    font-size: 24px;
    margin: 0;
}

.profile-header p {
    color: #666;
    margin-top: 5px;
}

.profile-details ul {
    list-style: none;
    padding: 0;
    text-align: left; /* Align details to the left */
}

.profile-details li {
    margin: 10px 0;
}

.profile-details li strong {
    font-weight: bold;
    margin-right: 10px;
}

.profile-footer .btn {
    background-color: #007BFF;
    color: #fff;
    padding: 5px 10px;
    margin-left:30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

.profile-footer .btn:hover {
    background-color: #0056b3;
}
</style>

<div class="container" style="width: 40%;">
   <!-- Add a title -->
   <div class="profile-card">
        <div class="profile-header">
       
            <div class="container" style="height: 50px; width: 100%; background-color: #0E1264; color: white;padding-top:10px">
            <form wire:submit.prevent="saveData" class="custom-form">
                <h3 style="text-align: center;">Teacher's Profile</h3>
            </div>
            <div>
                @if ($teacher)
                <img src="{{ asset('storage/' . $teacher->image) }}" alt="Teacher Image" class="mt-2" style="max-width: 200px;margin-left:30px" />
                <span>{{$image}}</span>
                    <h2 style="margin-bottom: 20px; margin-left:20px">{{ $teacher->name }}</h2>
                    <h2 style="margin-bottom: 20px;color:red">{{ $teacher->specialization }}</h2>
                    <p>{{ $teacher->specialization }}</p>
                @else
                    <p>Teacher not found.</p>
                @endif
            </div>
        </div>
        <div class="profile-details" style="padding-left: 120px;">
            @if ($teacher)
                <ul>
                    <li><strong>ID:</strong> {{ $teacher->id }}</li>
                    <li><strong>Gender:</strong> {{ $teacher->gender }}</li>
                    <li><strong>Date of Birth:</strong> {{ $teacher->date_of_birth }}</li>
                    <li><strong>Address:</strong> {{ $teacher->address }}</li>
                    <li><strong>Mobile:</strong> {{ $teacher->mobile }}</li>
                    <li><strong>Email:</strong> {{ $teacher->email }}</li>
                    <li><strong>Qualification:</strong> {{ $teacher->qualification }}</li>
                    <li><strong>Experience:</strong> {{ $teacher->experience }} years</li>
                    <li><strong>Remarks:</strong> {{ $teacher->remarks }}</li>
                </ul>
            @endif
        </div>
        <div class="profile-footer">
                <div class="form-group">
                    <a href="/teacher/edit">Edit</a>
<!-- <input type="submit" href="/teacher/edit" class="btn btn-block btn-dark" style="background-color:#0E1264; margin-top:40px; margin-left:10px;width:40px;width:120px" value="Edit Profile" /> -->
</div>
                </div>
    </div>
</div>