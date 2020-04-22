<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
Use Alert;

class ContactMessageController extends Controller
{
    public function send(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'name' => 'required',
        ]);

        $message = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        Alert::success('Message Sent', 'Thank you for getting in touch, we will get back to you shortly.');
        return redirect('/contact');
    }
}
