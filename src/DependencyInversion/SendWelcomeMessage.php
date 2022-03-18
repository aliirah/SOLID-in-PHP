<?php

namespace App\DependencyInversion;

class SendWelcomeMessage
{
    private NotifiableInterface $notifiable;

    public function __construct(NotifiableInterface $notifiable)
    {
        $this->notifiable = $notifiable;
    }

    public function sendMessage($user)
    {
        $message = "Welcome {$user->name}";
        $this->notifiable->send($message);
    }
}