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
    margin-left: 30px;
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
    <div class="profile-card">
        <div class="profile-header" style="margin-top:10px">
            <div class="container" style="height:50px;width:100%;background-color:#0E1264;color:white">
                <h3 style="text-align: center;">Teacher's Profile</h3>
            </div>
            <img src="https://pngimg.com/uploads/teacher/teacher_PNG11.png" style="width:70px;height:70px;margin-top:20px" alt="Teacher Profile Picture" class="profile-pic">
            <h2>Srinija</h2>
            <p>Mathematics Teacher</p>
        </div>
        <div class="profile-details" style="padding-left:80px">
            <form wire:submit.prevent="updateProfile">
                <ul>
                    <li><strong>ID:</strong></li>
                    <li><strong>Gender:</strong> {{ $gender }}</li>
                    <li><strong>Date of Birth:</strong> {{ $dateOfBirth }}</li>
                    <li><strong>Address:</strong>
                        <input wire:model="address" type="text" class="form-control">
                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                    </li>
                    <li><strong>Mobile:</strong>
                        <input wire:model="mobile" type="text" class="form-control">
                        @error('mobile') <span class="text-danger">{{ $message }}</span> @enderror
                    </li>
                    <li><strong>Email:</strong>
                        <input wire:model="email" type="email" class="form-control">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </li>
                    <li><strong>Qualification:</strong> {{ $qualification }}</li>
                    <li><strong>Experience:</strong>
                        <input wire:model="experience" type="text" class="form-control">
                        @error('experience') <span class="text-danger">{{ $message }}</span> @enderror
                    </li>
                    <li><strong>Remarks:</strong> {{ $remarks }}</li>
                </ul>
                <div class="profile-footer">
                    <button type="submit" class="btn btn-primary" style="background-color:#0E1264">Save Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>


