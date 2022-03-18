<?php

namespace App\InterfaceSegregation\Correct;

use App\InterfaceSegregation\Correct\Interfaces\TestableInterface;

class Tester implements TestableInterface
{
    public function test(): string
    {
        return 'testing';
    }
}