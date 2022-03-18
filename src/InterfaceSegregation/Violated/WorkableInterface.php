<?php

namespace App\InterfaceSegregation\Violated;

interface WorkableInterface
{
    public function canCode(): bool;
    public function work(): string;
    public function test(): string;
}