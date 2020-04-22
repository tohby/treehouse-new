<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index(){
        $messages = Contact::orderBy('created_at', 'desc')->get();
        $read = Contact::where('is_read', 1)->get();
        $unread = Contact::where('is_read', 0)->get();
        return view('admin/messages/index', compact('messages', 'read', 'unread'));
    }

    /**
     * show message content
     */
    public function show(Message $message){

    }

    /**
     * show read messages only
     */
    public function read(){

    }

    /**
     * show unread messages
     */
    public function unread(){

    }

    /**
     * function not in use in the main time
     */
    public function delete(){
        
    }
}
