<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PlaygroundEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

 private string $message;
    public function __construct(string $message)
    {
        $this->message = $message;
    }


    public function broadcastOn()
    {
        return new Channel('public.playground.1');
    }

    //custom event name

    public function broadcastAs()
    {
        return 'playground';
    }


    //way to attach data in the event payload

    public function broadcastWith()
    {

        return [
            'message'  => $this->message,
        ];
    }
}
