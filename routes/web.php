<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RSVPController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/location', 'location')->name('location');
    Route::get('/rsvps', 'rsvp')->name('rsvp');
});

Route::controller(AuthController::class)->name('login')->group(function () {
    Route::get('/login', 'login');
    Route::post('/auth', 'auth')->name('.auth');
});

Route::controller(RSVPController::class)->name('rsvp.')->group(function () {
    Route::post('/store', 'store')->name('store');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(RSVPController::class)->name('rsvp.')->group(function () {
        Route::get('/index', 'index')->name('index');
    });
    Route::resource('gift', GiftController::class);

    Route::controller(AuthController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
    });
});
