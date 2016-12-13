<?php

namespace App\Listeners;

use App\Events\NadzorRequested;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNadzorRequestedNotification
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
     * @param  NadzorRequested  $event
     * @return void
     */
    public function handle(NadzorRequested $event)
    {
        //
    }
}
