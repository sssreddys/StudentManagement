<?php

use App\Livewire\StaffControl;
use App\Livewire\StudentRegistration;
use App\Livewire\StaffRegistration;
use App\Livewire\StudentControl;
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


    Route::get('/StudentControl', StudentControl::class)->name('student-control');

    Route::get('/StaffControl', StaffControl::class)->name('staff-control');
});
