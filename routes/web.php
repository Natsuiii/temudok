<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->name('dashboard');

// routes/web.php
Route::get('/send-email/{email}', [EmailController::class, 'sendEmailNotification']);
Route::get('/appointment/table', function () {
    return view('appointment.table');
})->name('appointment.table');

