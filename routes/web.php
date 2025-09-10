<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\Adminmiddleware;
use App\Http\Middleware\Studentmiddleware;
use App\Http\Middleware\organizermiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/mdetails', function () {
    return view('clients.meeting-details');
});
Route::get('/meetingss', function () {
    return view('clients.meetings');
});
Route::get('/feedback', function () {
    return view('feedback');
});

Route::post('/contactform', [HomeController::class,('insertcontact')])->name('contactform');

});
// Admin middleware start
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), Adminmiddleware::class])->group(function () {


});
// Admin middleware end
 
// Student middleware start
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), Studentmiddleware::class])->group(function () {


});
// Student middleware end


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), organizermiddleware::class])
    ->group(function () {
       Route::get('/organ', function () {
            return view('organizer.index'); 
            // file: resources/views/organizer/index.blade.php
        });
    });
     