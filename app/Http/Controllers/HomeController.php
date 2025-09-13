<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactform;
use App\Models\events;
use App\Models\mediagallarey;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Calculation\DateTimeExcel\Current;
use App\Models\organizerrequest;

class HomeController extends Controller
{
    
    public function insertcontact(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        $contact = new Contactform();
        $contact->name = $name;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->message = $message;
        $contact->save();

        return redirect()->back()->with(['success' => 'Contact form submitted successfully']);

    }

    public function showevents()
{
    $today = Carbon::today();

   
    $media = mediagallarey::with('event')->get();

    $ongoingEvents = [];
    $pastEvents = [];
    $upcomingEvents = [];

    foreach ($media as $item) {
        if ($item->event && $item->event->Date) {
            $eventDate = Carbon::parse($item->event->Date);

            if ($eventDate->equalTo($today)) {
                $ongoingEvents[] = $item;
            } elseif ($eventDate->lessThan($today)) {
                $pastEvents[] = $item;
            } else {
                $upcomingEvents[] = $item;
            }
        }
    }

    return view('clients.index', compact('ongoingEvents', 'pastEvents', 'upcomingEvents'));
    
   }
   public function organizerRequest()
{
    return $this->hasOne(organizerrequest::class);
}
public function requestOrganizer()
{
    organizerrequest::create([
        'id' => auth()->id(),
    ]);

    return redirect()->back()->with('success', 'Your request has been submitted for approval.');
}

}