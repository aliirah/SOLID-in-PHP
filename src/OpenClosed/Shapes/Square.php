<?php

namespace App\OpenClosed\Shapes;

use App\OpenClosed\ShapeInterface;

class Square implements ShapeInterface
{
    public float $length;

    /**
     * @param float $length
     */
    public function __construct(float $length)
    {
        $this->length = $length;
    }

    /**
     * @return float|int
     */
    public function area(): float|int
    {
        return $this->length ** 2;
    }
}