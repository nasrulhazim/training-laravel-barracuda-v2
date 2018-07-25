<?php

namespace App\Listeners;

use App\Notifications\SendActivationEmail as ActivationEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendActivationEmail
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
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // create a random token
        $token = str_random(64);
        $event->user->activation_token = $token;
        $event->user->save();

        // send notification
        $event->user->notify(
            new ActivationEmail($token)
        );
    }
}
