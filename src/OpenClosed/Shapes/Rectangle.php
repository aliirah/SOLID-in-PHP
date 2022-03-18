<?php

namespace App\OpenClosed\Shapes;

use App\OpenClosed\ShapeInterface;

class Rectangle implements ShapeInterface
{
    public float $width;
    public float $height;

    public function __construct(float $width, float $height)
    {

        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float|int
    {
        return $this->width * $this->height;
    }
}