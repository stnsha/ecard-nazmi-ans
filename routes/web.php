<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\HomeController;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/location', 'location')->name('location');
});


Route::prefix('rsvp')->name('rsvp.')->group(function () {
    Route::resource('/', AttendanceController::class);
});
