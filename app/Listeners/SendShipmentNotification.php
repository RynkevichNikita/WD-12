<?php

namespace App\Listeners;

use App\Events\OrderStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\StatusEmail;
use Illuminate\Support\Facades\Mail;

class SendShipmentNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderStatus $event): void
    {
        Mail::to('man@ger.com')->queue(new StatusEmail());
    }
}
