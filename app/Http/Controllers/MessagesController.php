<?php

namespace App\Http\Controllers;
use App\Contact;

use Illuminate\Http\Request;
use App\Events\MessageRead;

class MessagesController extends Controller
{
    public function index(){
        $messages = Contact::orderBy('is_read', 'asc')->orderBy('created_at', 'desc')->paginate(15);
        $read = Contact::where('is_read', 1)->get();
        $unread = Contact::where('is_read', 0)->get();
        return view('admin/messages/index', compact('messages', 'read', 'unread'));
    }

    /**
     * show message content
     */
    public function show($id){
        $message = Contact::find($id);
        event(new MessageRead($message));
        return view('admin/messages/show', compact('message'));
    }

    /**
     * show read messages only
     */
    public function read(){
        $messages = Contact::where('is_read', 1)->paginate(15);
        $read = Contact::where('is_read', 1)->get();
        $unread = Contact::where('is_read', 0)->get();
        return view('admin/messages/read', compact('messages', 'read', 'unread'));
    }

    /**
     * show unread messages
     */
    public function unread(){
        $messages = Contact::where('is_read', 0)->simplePaginate(15);
        $read = Contact::where('is_read', 1)->get();
        $unread = Contact::where('is_read', 0)->get();
        return view('admin/messages/unread', compact('messages', 'read', 'unread'));
    }

    /**
     * function not in use in the main time
     */
    public function delete(){
        
    }
}
