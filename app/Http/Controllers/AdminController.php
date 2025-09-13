<?php

namespace App\Http\Controllers;


use App\Exports\UsersExport;
use App\Models\announcement;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\organizerrequest;
use App\Models\Events;
use App\Models\venue;
use Illuminate\Support\Facades\Hash;

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
        return view('Admin.user', compact('rec'));
    }

    public function exportExcel()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function exportPDF()
    {
        $users = User::select('id', 'name', 'email', 'role')->get();
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
        return redirect()->back()->with('message', 'Venue has been uploaded');
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

    public function fetchAnnouncements()
    {

        $role = Auth::check() ? Auth::user()->role : 'guest';

        $announcements = collect();

        if ($role === 'user') {

            $announcements = Announcement::whereIn('role', ['Everyone', 'Students Only'])
                ->where('is_active', 1)
                ->get();
        } elseif ($role === 'organizer') {

            $announcements = Announcement::whereIn('role', ['Everyone', 'Event Organizers'])
                ->where('is_active', 1)
                ->get();
        } else {

            $announcements = Announcement::where('role', 'Everyone')
                ->where('is_active', 1)
                ->get();
        }

        return response()->json([
            'status' => $announcements->isNotEmpty(),
            'data'   => $announcements
        ]);
    }
    public function changepasswords($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->password = Hash::make('12345678');
            $user->save();
            return redirect()->back()->with('message', 'Password changed to default successfully.');
        } else {
            return redirect()->back()->with('error', 'User not found.');
        }
    }
public function approvedorganizers()
    {
        $organizers = OrganizerRequest::where('organizerstatus', 'Pending')->get();
        return view('admin.approvedorganizers', compact('organizers'));
    }

    // accept
    public function acceptOrganizer($id)
    {
        $org = OrganizerRequest::findOrFail($id);
        $org->organizerstatus = 'Accepted';
        $org->save();
         $user = User::find($org->id);
    if ($user) {
        $user->role = 'organizer';
        $user->save();
    }

        return redirect()->route('approvedorganizers')->with('success', 'Organizer accepted successfully.');
    }

    // reject
 public function denyrequest($id)
    {
    $org = OrganizerRequest::findOrFail($id);

    $org->organizerstatus = 'Rejected';
    $org->save();

    $org->user->role = 'user'; // reset role if needed
    $org->user->save();

    return redirect()->back()->with('success', 'Organizer rejected successfully.');
}
    public function acceptrequest($id)
   {
    $org = OrganizerRequest::findOrFail($id);

    $org->organizerstatus = 'Accepted';
    $org->save();

    $org->user->role = 'organizer'; // update role in users
    $org->user->save();

    return redirect()->back()->with('success', 'Organizer accepted successfully.');
}
    function getorganizer(){
    $organizers=organizerrequest::get();
    return view('Admin.approvedorganizers',compact('rec'));
    }
}
