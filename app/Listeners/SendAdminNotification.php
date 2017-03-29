<?php

namespace App\Listeners;

use App\Events\MessageCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAdminNotification
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
     * @param  MessageCreated  $event
     * @return void
     */
    public function handle(MessageCreated $event)
    {
        $first_name = $event->first_name;
        $last_name = $event->last_name;
        $email = $event->email;
        $msg = $event->msg;
        Mail::send('email.user_notification', ['name' => $first_name], function($message) use($first_name, $last_name, $email, $msg){
            $message->from($email, $first_name);
            $message->to('stharonish@gmail.com', 'Admin');
            $message->subject('Thank you for your Quote!');
        });
    }
}
