<?php

use App\Http\Controllers\Backend\DashboardController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('teachers/delete', [TeacherController::class, 'destroy'])->name('teachers.destroy');
Route::resource('teachers', 'TeacherController');
Route::resource('students', 'StudentController');

