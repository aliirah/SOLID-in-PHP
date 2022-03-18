<?php

namespace App\DependencyInversion;

class SendWelcomeMessage
{

//    Entities must depend on abstractions, not on concretions. It states that the high-level module must not depend on the low-level module, but they should depend on abstractions.

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