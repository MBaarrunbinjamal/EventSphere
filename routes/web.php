<?php

use App\Http\Controllers\Admin\UserStatsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\OrganizerMiddleware;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('clients.index');
});

Route::get('/fetch-announcements', [AdminController::class, 'fetchAnnouncements']);

// Auth middleware group
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/mdetails', fn() => view('clients.meeting-details'));
    Route::get('/meetingss', fn() => view('clients.meetings'));
    Route::post('/contactform', [HomeController::class, 'insertcontact'])->name('contactform');
});

// Student routes
Route::get('/student', fn() => view('student.index'));
Route::get('/setting', fn() => view('student.settings'));
Route::get('/review', fn() => view('Admin.review'));

// Admin routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', fn() => view('Admin.dashboard'));

    Route::post('/eventimg', [EventController::class, 'imageupload']);
    Route::get('/user', [AdminController::class, 'getuser']);
    Route::get('/media', [EventController::class, 'geteverything']);
    Route::get('/announcement', [AdminController::class, 'showAnnouncementForm'])->name('announcement');
    Route::post('/save-announcement', [AdminController::class, 'storeAnnouncement'])->name('save.announcement');
    Route::get('/view-announcements', [AdminController::class, 'viewAnnouncements'])->name('view.announcements');
    Route::get('/export-users-excel', [AdminController::class, 'exportExcel'])->name('users.export.excel');
    Route::get('/export-users-pdf', [AdminController::class, 'exportPDF'])->name('users.export.pdf');
    Route::get('/events', [EventController::class, 'getevents'])->name('events');
    Route::get('/event/{id}', [EventController::class, 'show'])->name('event.details');
    Route::get('/roleUpdate', [AdminController::class, 'roleUpdate']);
    Route::post('/roleUpdate/{id}', [AdminController::class, 'roleUpdate'])->name('roleUpdate');

    Route::get('/venue', fn() => view('Admin.uploadvenue'));
    Route::post('/uploadvenue', [AdminController::class, 'upload_venue']);
});

// Organizer routes
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), OrganizerMiddleware::class])->group(function () {
    Route::get('/organ', [EventController::class, 'geteventcreationpage']);
    Route::post('/events', [EventController::class, 'store']);
    Route::get('/fetch-announcements', [AdminController::class, 'fetchAnnouncements']);
});

// User stats
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/user-stats', [UserStatsController::class, 'index'])->name('admin.user-stats');
});

// Reviews (public)
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');

// Admin-only reviews (protected with auth + IsAdmin middleware)
Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
    Route::get('/reviews', [ReviewController::class, 'adminIndex'])->name('admin.reviews.index');
    Route::patch('/reviews/{review}', [ReviewController::class, 'updateStatus'])->name('admin.reviews.update');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');
});
