<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::prefix('rsvp')->name('rsvp.')->group(function () {
    Route::resource('/', AttendanceController::class);
});
