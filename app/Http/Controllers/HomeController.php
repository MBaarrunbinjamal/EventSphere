<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactform;

class HomeController extends Controller
{
    //
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
}