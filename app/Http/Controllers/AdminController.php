<?php

namespace App\Http\Controllers;


use App\Exports\UsersExport;
use App\Models\announcement;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Events;
use App\Models\venue;

class AdminController extends Controller
{
    //
    public function showAnnouncementForm()
    {
        return view('Admin.announcement');
    }
    public function storeAnnouncement(Request $rec)
    {
         $rec->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'role'=>'required|in:1,2,3',
        ]);
        // Create a new announcement
        $announcement = new announcement();
        $announcement->title = $rec->title;
        $announcement->content = $rec->content;
        $announcement->role = $rec->role; 
        $announcement->save();

        return redirect()->back()->with('success', 'Announcement created successfully.');
    }
     public function viewAnnouncements()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('Admin.view-announcements', compact('announcements'));
    }
    public function getuser()
    {
       $rec = User::get();
        return view('Admin.user',compact('rec'));
    }

 public function exportExcel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

     public function exportPDF()
    {
        $users = User::select('id','name','email','role')->get();
        $pdf = Pdf::loadView('Admin.users-pdf', compact('users'));
        return $pdf->download('users.pdf');
    }

    public function upload_venue(Request $req)
    {
        $vname = $req->venue_name;
        $vseats = $req->venue_seats;

        $table = new venue();
        $table->venue_name = $vname;
        $table->venue_seats = $vseats;
        $table->save();
        return redirect()->back()->with('message','Venue has been uploaded');

    }
    public function roleUpdate(Request $req, $id)
    {
        $user = User::find($id);
        if ($user) {
            $user->role = $req->input('role');
            $user->save();
            return redirect()->back()->with('message', 'User role updated successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }

}
