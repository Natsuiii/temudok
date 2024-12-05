<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function(){
        return view('dashboard.index');
    })->name('dashboard');
    
    // routes/web.php
    Route::get('/send-email/{email}', [EmailController::class, 'sendEmailNotification']);
    Route::get('/appointment/table', function () {
        return view('appointment.table');
    })->name('appointment.table');
    
    Route::get('/calendar', function(){
        return view('calendar.index');
    })->name('calendar');
    Route::resource('user', AddUserController::class); 
    Route::delete('/users/bulk-destroy', [AddUserController::class, 'bulkDestroy'])->name('users.bulkDestroy');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
