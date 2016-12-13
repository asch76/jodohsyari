<?php

namespace App\Listeners;

use App\Events\NikahRequested;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNikahRequestedNotification
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
     * @param  NikahRequested  $event
     * @return void
     */
    public function handle(NikahRequested $event)
    {
        //
    }
}
