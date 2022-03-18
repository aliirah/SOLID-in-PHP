<?php

namespace App\InterfaceSegregation\Correct;

use App\InterfaceSegregation\Correct\Interfaces\TestableInterface;
use App\InterfaceSegregation\Correct\Interfaces\CodeableInterface;

class Programmer implements CodeableInterface, TestableInterface
{
    public function code(): string
    {
        return 'coding';
    }

    public function test(): string
    {
        return 'testing';
    }
}