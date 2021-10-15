<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SubscribeToMailchimp
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    private $mailchimp;

    public function __construct(\Mailchimp $mailchimp)
    {
    $this->mailchimp = $mailchimp;
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $this->mailchimp->lists->subscribe(
            env('MAILCHIMP_LIST_ID'),
            ['email' => $event->email->email],
            null,
            null,
            false
        );
    }
}
