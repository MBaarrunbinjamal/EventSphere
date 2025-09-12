<?php
use App\Http\Controllers\Admin\UserStatsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Adminmiddleware;
use App\Http\Middleware\organizermiddleware;
use App\Http\Middleware\Studentmiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

    Route::get('/dashboard', function () {
        return view('Admin.dashboard');

    });
       Route::post('/eventimg', [EventController::class, 'imageupload']);
    Route::get('/user', [AdminController::class,('getuser')]);

       Route::get('/media', [EventController::class,('geteverything')]);
    Route::get('/announcement', [AdminController::class, 'showAnnouncementForm'])->name('announcement');
    Route::post('/save-announcement', [AdminController::class, 'storeAnnouncement'])->name('save.announcement');
    Route::get('/view-announcements', [AdminController::class, 'viewAnnouncements'])->name('view.announcements');
    Route::get('/user', [AdminController::class, ('getuser')]);
    Route::get('/export-users-excel', [AdminController::class, 'exportExcel'])->name('users.export.excel');
    Route::get('/export-users-pdf', [AdminController::class, 'exportPDF'])->name('users.export.pdf');
    Route::get('/events', [EventController::class, 'getevents'])->name('events');
    Route::get('/event/{id}', [EventController::class, 'show'])->name('event.details');
    //    Route::get('/event/{id}', [EventController::class, 'show'])->name('event.details');
    // Announcement routes
    Route::get('/venue',function(){
        return view('Admin.uploadvenue');
    });
    Route::post('/uploadvenue',[AdminController::class,('upload_venue')]);

});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), organizermiddleware::class])
    ->group(function () {
        
       
   Route::get('/organ',[EventController::class,('geteventcreationpage')]);
            
        
       Route::post('/events', [EventController::class, 'store']);
      
  
     Route::get('/fetch-announcements', [AdminController::class, 'fetchAnnouncements']);

    });


    Route::middleware(['auth'])->group(function () {
    Route::get('/admin/user-stats', [UserStatsController::class, 'index'])->name('admin.user-stats');
});
     
