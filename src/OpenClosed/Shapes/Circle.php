<?php

namespace App\OpenClosed\Shapes;

use App\OpenClosed\ShapeInterface;

class Circle implements ShapeInterface
{
    public float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float|int
     */
    public function area(): float|int
    {
        return $this->radius ** 2 * pi();
    }
}

$circle1 = new Circle(2);
$circle2 = new Circle(4);