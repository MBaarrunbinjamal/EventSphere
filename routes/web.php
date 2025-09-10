<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Adminmiddleware;
use App\Http\Middleware\Studentmiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clients.index');
});

// Auth middleware group
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

    Route::post('/contactform', [HomeController::class, 'insertcontact'])->name('contactform');
});

// Admin middleware group
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), Adminmiddleware::class])->group(function () {
    // Admin dashboard
    Route::get('/dash', function () {
        return view('Admin.dashboard');
    });
    Route::get('/announcement', [AdminController::class, 'showAnnouncementForm'])->name('announcement');
    Route::post('/save-announcement', [AdminController::class, 'storeAnnouncement'])->name('save.announcement');
    Route::get('/view-announcements', [AdminController::class, 'viewAnnouncements'])->name('view.announcements');

    // Announcement routes

});

// Student middleware group
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), Studentmiddleware::class])->group(function () {
    // Add student routes here
});
