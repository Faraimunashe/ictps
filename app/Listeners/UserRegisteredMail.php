<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Mail\SendUserPassword;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UserRegisteredMail
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
    public function handle(UserRegistered $event): void
    {
        $user = $event->user;
        $password = $event->password;
        Mail::to($user->email)->send(new SendUserPassword($user, $password));
    }
}
