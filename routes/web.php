<?php

use App\Livewire\RetrieveStaffData;
use App\Livewire\RetrieveStudentData;
use App\Livewire\StudentRegistration;
use App\Livewire\StaffRegistration;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/", \App\Livewire\Home::class)->name('home');
// Route::get("/register", \App\Livewire\AdminRegister::class)->name('register');
// Route::get("/login", \App\Livewire\AdminLogin::class)->name('login');
Route::group(['middleware' => 'checkAuth'], function () {
    Route::get("/login",  \App\Livewire\AdminLogin::class)->name('login');
    Route::get("/register",  \App\Livewire\AdminRegister::class)->name('register');
    

});

Route::group(['middleware' => 'auth'], function () {
    Route::get("/", \App\Livewire\Home::class)->name('home');
    
    Route::get('/StudentRegistration', StudentRegistration::class)->name('student-registration');

    Route::get('/StaffRegistration', StaffRegistration::class)->name('staff-registration');

    Route::get('/RetrieveStudentData', RetrieveStudentData::class)->name('retrieve-student-data');
    Route::get('/RetrieveStaffData', RetrieveStaffData::class)->name('retrieve-staff-data');
});
