<?php

namespace App\Listeners;

use App\Contact;
use App\Events\MessageRead;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MarkMessageAsRead
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  MessageRead  $event
     * @return void
     */
    public function handle(MessageRead $event)
    {
        $message = Contact::find($event->message->id);
        $message->is_read = 1;
        $message->save();
    }
}
