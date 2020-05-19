<?php

namespace SistemaGestionSimple\Events;

use SistemaGestionSimple\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NotificacionEvent implements ShouldBroadcast
{
    public $text;

    /**
     * Create a new event instance.
     *
     * @return void
     */

    public function __construct($text)
    {
        $this->text = $text;
    }


    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['canal_notificaciones'];
    }
}
