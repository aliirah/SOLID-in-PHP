<?php

namespace App\SingleResponsibility;

interface OrderOutputInterface
{
    public function output(Order $order): bool|string;
}