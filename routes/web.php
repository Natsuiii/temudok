<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UnavailableTimeController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('home.index');
})->name('home');
Route::get('/appointment', function(){
    return view('home.appointment');
})->name('appointment');
Route::get('/history', function(){
    return view('home.history');
})->name('history');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store'])->name('register.store');

Route::middleware('auth')->group(function () {

    // Route::middleware(CheckRole::class . ':Admin')->group(function () {
        Route::resource('user', AddUserController::class);
        Route::delete('/users/bulk-destroy', [AddUserController::class, 'bulkDestroy'])->name('users.bulkDestroy');
    // });

    // Route::middleware(CheckRole::class . ':Doctor')->group(function () {
        Route::resource('/schedule', UnavailableTimeController::class);
        Route::delete('/schedules/bulk-destroy', [UnavailableTimeController::class, 'bulkDestroy'])->name('schedules.bulkDestroy');
    // });

    Route::get('/dashboard', function () {
        return view('dashboard.index2');
    })->name('dashboard');

    // routes/web.php
    Route::get('/send-email/{email}', [EmailController::class, 'sendEmailNotification']);
    Route::get('/appointment/table', function () {
        return view('appointment.table');
    })->name('appointment.table');

    Route::get('/calendar', function () {
        return view('calendar.index');
    })->name('calendar');

    Route::resource('appointment', AppointmentController::class);
    Route::get('/get-unavailable-times/{doctorId}', [AppointmentController::class, 'getUnavailableTimes']);

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});