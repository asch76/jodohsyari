<?php

namespace App\Listeners;

use App\Events\KhitbahRequested;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendKhitbahRequestedNotification
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
     * @param  KhitbahRequested  $event
     * @return void
     */
    public function handle(KhitbahRequested $event)
    {
        //
    }
}
