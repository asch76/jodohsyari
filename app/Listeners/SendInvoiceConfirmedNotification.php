<?php

namespace App\Listeners;

use App\Events\InvoiceConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvoiceConfirmedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  InvoiceConfirmed  $event
     * @return void
     */
    public function handle(InvoiceConfirmed $event)
    {
        //
    }
}
