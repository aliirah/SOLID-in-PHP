<?php

namespace App\SingleResponsibility;

class Order
{

//    A class should have one and only one reason to change, meaning that a class should have only one job.

    protected array $items;
    protected OrderOutputInterface $outputDriver;

    public function __construct(array $items, OrderOutputInterface $outputDriver)
    {
        $this->items = $items;
        $this->outputDriver = $outputDriver;
    }

    /**
     * @return bool|string
     */
    public function output(): bool|string
    {
        return $this->outputDriver->outPut($this);
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }
}