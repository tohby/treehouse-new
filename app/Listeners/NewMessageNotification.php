<?php

namespace App\Listeners;

use App\User;
use App\Events\NewMessage;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\MessageReceived;

class NewMessageNotification
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
     * @param  =NewMessage  $event
     * @return void
     */
    public function handle(NewMessage $event)
    {
        $users = User::get();
        Notification::route('mail', $users)->notify(new MessageReceived($event->message));
    }
}
