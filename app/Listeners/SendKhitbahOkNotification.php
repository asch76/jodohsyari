<?php

namespace App\Listeners;

use App\Events\KhitbahOk;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendKhitbahOkNotification
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
     * @param  KhitbahOk  $event
     * @return void
     */
    public function handle(KhitbahOk $event)
    {
        //
    }
}
