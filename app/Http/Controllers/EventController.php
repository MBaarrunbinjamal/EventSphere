<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Store a newly created event in storage.
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:100',
            'description' => 'required|string',
            'date'        => 'required|date',
            'time'        => 'required',
            'venue'       => 'required|string|max:255',
        ]);

        // Save event with organizer_id (from logged-in user)
        $event = new Events();
        $event->title        = $request->title;
        $event->category     = $request->category;
        $event->description  = $request->description;
        $event->date         = $request->date;
        $event->time         = $request->time;
        $event->venue        = $request->venue;
        $event->organizer_id =  Auth::id();
        $event->save();

        return redirect()->back()->with('success', 'Event created successfully ✅');
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
}
