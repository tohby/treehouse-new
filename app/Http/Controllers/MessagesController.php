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

    public function show(Message $message){

    }

    public function read(){

    }

    public function unread(){

    }

    public function delete(){
        
    }
}
