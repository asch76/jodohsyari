<?php

namespace App\Listeners;

use App\Events\PostPublished;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Notifications\NewArtikel;
use App\Notifications\NewVideo;
use Notification;
use App\User;


class SendPostPublishedNotification
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
     * @param  NewPost  $event
     * @return void
     */
    public function handle(PostPublished $event)
    {
        if ($event->post->type == 'video') {
            Notification::send(User::member()->get(), new NewVideo($event->post));
        } else if ($event->post->type == 'artikel') {
            Notification::send(User::member()->get(), new NewArtikel($event->post));
        }
    }
}
