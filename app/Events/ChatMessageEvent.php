<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatMessageEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
        
    }


    public function broadcastOn()
    {
        return new PrivateChannel('private.chat.1');
    }

    public function broadcastAs(){
        return 'chat-message';
    }

    public function broadcastWith(){
        return [
            'message' => $this->message
        ];
    }
}
