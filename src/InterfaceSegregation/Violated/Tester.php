<?php

namespace App\InterfaceSegregation\Violated;

class Tester implements WorkableInterface
{
    public function work(): string
    {
        // TODO: Implement work() method.
    }

    public function test(): string
    {
        return 'testing';
    }

    public function canCode(): bool
    {
        return false;
    }
}