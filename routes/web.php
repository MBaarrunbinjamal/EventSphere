<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.index');
});
Route::get('/mdetails', function () {
    return view('clients.meeting-details');
});
Route::get('/meetingss', function () {
    return view('clients.meetings');
});

Route::post('/contactform', [App\Http\Controllers\HomeController::class,('insertcontact')])->name('contactform');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
