<?php

namespace App\DependencyInversion;

interface NotifiableInterface
{
    public function send(string $message);
}