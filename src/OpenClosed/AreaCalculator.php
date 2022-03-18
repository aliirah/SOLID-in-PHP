<?php

namespace App\OpenClosed;

class AreaCalculator
{
    /**
     * @param ShapeInterface ...$shapes
     * @return float|int
     */
    public function calculate(ShapeInterface ...$shapes): float|int
    {
        foreach ($shapes as $shape) {
            $areas[] = $shape->area();
        }

        return array_sum($areas);
    }
}