<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Livewire\TeachersProfile;

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
   // Route::get("/addTodo", \App\Livewire\AddTodo::class)->name('addTodo');
   // Route::get("/todo/edit/{id}", \App\Livewire\EditTodo::class)->name('editTodo');
});
Route::get('/teachers',function(){
    return view('teachersdashboard_view');
   });
Route::get('/profile',function(){
    return view('teachersprofile_view');
   });

Route::get('/teacher/edit', function () {
    return view('teachersedit_view',);
});


// Route::get('/TeacherProfile/{id}',TeachersProfile::class)->name('teacher-profile');
Route::get('/teacher/profile/{id}',TeachersProfile::class)->name('teacher-profile');