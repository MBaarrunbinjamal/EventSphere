<?php

namespace App\Http\Controllers;

use App\Models\announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
  
}
