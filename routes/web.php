<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UnavailableTimeController;
use App\Http\Controllers\LocalController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/articles/{article:slug}', [HomeController::class, 'details'])->name('articles.detail');
Route::get('/tutorial', [HomeController::class, 'tutorial'])->name('tutorial');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'store'])->name('register.store');
Route::get('/switch-language/{lang}', [LocalController::class, 'switchLanguage'])->name('switch.language');

Route::middleware('auth')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'create'])->name('appointments');

    Route::get('/get-unavailable-times/{doctorId}', [AppointmentController::class, 'getUnavailableTimes'])->name('get-unavailable-times');

    Route::get('/history', [AppointmentController::class, 'history'])->name('history');

    Route::middleware(CheckRole::class . ':Admin')->group(function () {
        Route::resource('user', AddUserController::class);
        Route::delete('/users/bulk-destroy', [AddUserController::class, 'bulkDestroy'])->name('users.bulkDestroy');
        Route::resource('/admin/category', CategoryController::class);
        Route::delete('/admin/bulk-destroy/category', [CategoryController::class, 'bulkDestroy'])->name('category.bulkDestroy');
    });

    Route::middleware(CheckRole::class . ':Doctor')->group(function () {
        Route::resource('/schedule', UnavailableTimeController::class);
        Route::delete('/schedules/bulk-destroy', [UnavailableTimeController::class, 'bulkDestroy'])->name('schedules.bulkDestroy');
        Route::get('/appointment', function () {
            return view('appointment.index');
        })->name('appointment.index');
        Route::resource('appointment', AppointmentController::class);
        Route::resource('/article', ArticleController::class)->parameters(['articles' => 'slug']);
        Route::delete('/articles/bulk-destroy', [ArticleController::class, 'bulkDestroy'])->name('articles.bulkDestroy');
    });

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('/send-email/{email}', [EmailController::class, 'sendEmailNotification']);

    Route::get('/calendar', function () {
        return view('calendar.index');
    })->name('calendar');

    Route::get('/success/{appointment}', [AppointmentController::class, 'success'])->name('success');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});