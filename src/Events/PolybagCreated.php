<?php

namespace Teresa\CartonBoxGuard\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PolybagCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $carton;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($carton)
    {
        $this->carton = $carton;
    }

    // /**
    //  * Get the channels the event should broadcast on.
    //  *
    //  * @return \Illuminate\Broadcasting\Channel|array
    //  */
    // public function broadcastOn()
    // {
    //     return new PrivateChannel('channel-name');
    // }
}
