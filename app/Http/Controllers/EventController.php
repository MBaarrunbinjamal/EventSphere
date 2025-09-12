<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\mediagallarey;
use Illuminate\Support\Facades\Auth;
use App\Models\venue;
class EventController extends Controller
{
    /**
     * Store a newly created event in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        // $request->validate([
        //     'title'       => 'required|string|max:255',
        //     'category'    => 'required|string|max:100',
        //     'description' => 'required|string',
        //     'date'        => 'required|date',
        //     'time'        => 'required',
        //     'venue'       => 'required',
        // ]);

        // Save event with organizer_id (from logged-in user)
        $event = new Events();
        $event->title        = $request->title;
        $event->category     = $request->category;
        $event->description  = $request->description;
        $event->date         = $request->date;
        $event->time         = $request->time;
        $event->venue        = $request->venuelist;
        $event->organizer_id =  Auth::id();
        $event->save();

        return redirect()->back()->with('success', 'Event created successfully ');
    }
    public function geteverything()
    {
        $events = Events::get();
        return view('Admin.media', compact('events'));
    }
    public function imageupload(Request $req)
    {
     $file = $req->file('image_path');
        $req->event_id;
        $req->caption;
        $fileName = time() . '_' . $file->getClientOriginalName();
 $file->move(public_path('uploads'), $fileName);

   $rec=new mediagallarey();
    $rec->event_id=$req->event_id;
    $rec->caption=$req->caption;
    $rec->image_path=$fileName;
    $rec->organizer_id=Auth::id();
    $rec->save();
    return redirect()->back();      
    }
   public function getevents()
    {
         $events = Events::orderBy('created_at', 'desc')->get();
        return view('Admin.events', compact('events'));
    }

    public function show($id)
    {
        $event = Events::findOrFail($id);
        return view('Admin.events', compact('event'));
    }
    public function geteventcreationpage()
    {
        $ven = venue::get();
        return view('organizer.index',compact('ven'));
    }
}
