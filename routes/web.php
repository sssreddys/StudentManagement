<?php

use App\Livewire\EditStaffDetails;
use App\Livewire\EditStudentDetails;
use App\Livewire\RetrieveStaffData;
use App\Livewire\RetrieveStudentData;
use App\Livewire\StudentRegistration;
use App\Livewire\StaffRegistration;
use App\Livewire\TeacherDashboard;
use App\Livewire\StudentDashboard;
use App\Livewire\StudentMarksDetails;
use App\Livewire\StudentReport;
use App\Livewire\TeacherReport;
use App\Livewire\TeachersEdit;
use Illuminate\Support\Facades\Route;
use App\Livewire\TeachersProfile;

Route::group(['middleware' => 'checkAuth'], function () {
    Route::get("/AdminLogin",  \App\Livewire\AdminLogin::class)->name('login');
    Route::get("/StaffLogin", \App\Livewire\StaffLogin::class)->name('staff');
    Route::get("/StudentLogin", \App\Livewire\StudentLogin::class)->name('student');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get("/", \App\Livewire\Home::class)->name('home');
    Route::get("/register",  \App\Livewire\AdminRegister::class)->name('register');
    Route::get('/StudentRegistration', StudentRegistration::class)->name('student-registration');
    Route::get('/StaffRegistration', StaffRegistration::class)->name('staff-registration');
    Route::get('/RetrieveStaffData', RetrieveStaffData::class)->name('retrieve-staff-data');
    Route::get('/RetrieveStudentData', RetrieveStudentData::class)->name('retrieve-student-data');
    Route::get('/EditStudentDetails/{std_id}', EditStudentDetails::class)->name('edit-student-details');
    Route::get('/EditStaffDetails/{id}', EditStaffDetails::class)->name('edit-staff-details');
    Route::get('/StudentMarksDetails', StudentMarksDetails::class)->name('std-marks-details');
});

Route::middleware(['auth:staff'])->group(function () {
Route::get('/teacher-profile',TeachersProfile::class)->name('teacher-profile');
Route::get('/teacher-dashboard',TeacherDashboard::class)->name('teacher-dashboard');
Route::get('/teacher-report', TeacherReport::class)->name('teacher-report');
Route::get('/teacher/edit/{id}', TeachersEdit::class)->name('teacher-edit');
});



Route::middleware(['auth:student'])->group(function () {
Route::get('/student-dashboard', StudentDashboard::class)->name('student-dashboard');
Route::get('/student-report',StudentReport::class)->name('student-report');
Route::get('/student-profile', function () {
        return view('livewire.student-profile');
    })->name('student-profile');
    
});








