<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
});

// routes/web.php
Route::get('/send-email/{email}', [EmailController::class, 'sendEmailNotification']);

