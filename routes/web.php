<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\Adminmiddleware;
use App\Http\Middleware\Studentmiddleware;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('clients.index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/mdetails', function () {
    return view('clients.meeting-details');
});
Route::get('/meetingss', function () {
    return view('clients.meetings');
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
Route::get('/dash', function () {
    return view('Admin.dashboard');
});
Route::get('/user', [AdminController::class,('getuser')]);


Route::get('/export-users-excel', [AdminController::class, 'exportExcel'])->name('users.export.excel');
Route::get('/export-users-pdf', [AdminController::class, 'exportPDF'])->name('users.export.pdf');

