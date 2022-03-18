<?php

namespace App\DependencyInversion\Notify;

use App\DependencyInversion\NotifiableInterface;

class Sms implements NotifiableInterface
{

    public function send(string $message)
    {
        // sending sms
    }
}