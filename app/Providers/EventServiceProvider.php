<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserRegistered' => [
            'App\Listeners\SendRegisterNotification',
            'App\Listeners\SendCriteriaMatchedNotification',
        ],
        'App\Events\InvoiceConfirmed' => [
            'App\Listeners\SendInvoiceConfirmedNotification',
        ],
        'App\Events\InvoicePaid' => [
            'App\Listeners\SendInvoicePaidNotification',
        ],
        'App\Events\NadzorRequested' => [
            'App\Listeners\SendNadzorRequestedNotification',
        ],
        'App\Events\NadzorOk' => [
            'App\Listeners\SendNadzorOkNotification',
        ],
        'App\Events\KhitbahRequested' => [
            'App\Listeners\SendKhitbahRequestedNotification',
        ],
        'App\Events\KhitbahOk' => [
            'App\Listeners\SendKhitbahOkNotification',
        ],
        'App\Events\NikahRequested' => [
            'App\Listeners\SendNikahRequestedNotification',
        ],
        'App\Events\PostPublished' => [
            'App\Listeners\SendPostPublishedNotification',
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
