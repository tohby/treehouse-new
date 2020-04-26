<?php

namespace App\Http\Controllers;

use App\Notifications\MessageReceived;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;
use App\Contact;
use App\Events\NewMessage;
Use Alert;
Use App\User;

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

        // Notification::route('mail', $users)->notify(new MessageReceived($message));
        event(new NewMessage($message));
        Alert::success('Message Sent', 'Thank you for getting in touch, we will get back to you shortly.')->showConfirmButton('Dismiss', '#ff6c00');
        return redirect('/contact');
    }
}
