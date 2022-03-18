<?php

namespace App\InterfaceSegregation\Violated;

class Programmer implements WorkableInterface
{
    public function work(): string
    {
        return 'coding';
    }

    public function test(): string
    {
        return 'testing';
    }

    public function canCode(): bool
    {
        return true;
    }
}