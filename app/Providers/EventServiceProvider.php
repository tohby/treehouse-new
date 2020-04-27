<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use App\Events\MessageRead;
use App\Events\NewMessage;
use App\Events\OrderPlaced;
use App\Listeners\MarkMessageAsRead;
use App\Listeners\NewMessageNotification;
use App\Listeners\SendNewOrderNotification;
use App\Listeners\SendOrderPlacedNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        MessageRead::class => [
            MarkMessageAsRead::class,
        ],
        NewMessage::class => [
            NewMessageNotification::class,
        ],
        OrderPlaced::class => [
            SendNewOrderNotification::class,
            SendOrderPlacedNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
