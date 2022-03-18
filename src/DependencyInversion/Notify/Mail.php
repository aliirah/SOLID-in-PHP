<?php

namespace App\DependencyInversion\Notify;

use App\DependencyInversion\NotifiableInterface;

class Mail implements NotifiableInterface
{
    public function send(string $message)
    {
        // sending mail
    }
}