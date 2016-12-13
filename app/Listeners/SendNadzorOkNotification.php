<?php

namespace App\Listeners;

use App\Events\NadzorOk;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNadzorOkNotification
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
     * @param  NadzorOk  $event
     * @return void
     */
    public function handle(NadzorOk $event)
    {
        //
    }
}
