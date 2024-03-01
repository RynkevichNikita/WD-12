<?php

namespace App\Listeners;

use App\Events\OrderStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\StatusNotification;
use App\Models\Customer;

class SendStatusNotification
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
        $customer = Customer::find($event->order->customerNumber);
        Mail::to($customer->contactLastName . '@email.com')->queue(new StatusNotification($event->order));
    }
}
