<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RSVPController;
use App\Http\Controllers\ToyyibPayController;

Route::fallback(function () {
    return redirect('/');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/location', 'location')->name('location');
    Route::get('/rsvps', 'rsvp')->name('rsvp');
    Route::get('/getRsvps', 'getRsvps')->name('getRsvps');
    Route::get('/salam-kaut', 'gift')->name('gift');
});

Route::controller(AuthController::class)->name('login')->group(function () {
    Route::get('/login', 'login');
    Route::post('/auth', 'auth')->name('.auth');
});

Route::controller(RSVPController::class)->name('rsvp.')->group(function () {
    Route::post('/store', 'store')->name('store');
});

Route::controller(ToyyibPayController::class)->name('toyyib.')->group(function () {
    Route::get('/createBill', 'createBill')->name('createBill');
    Route::get('/callback', 'callback')->name('callback');
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
