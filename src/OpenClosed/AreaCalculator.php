<?php

namespace App\OpenClosed;

class AreaCalculator
{

//    Objects or entities should be open for extension but closed for modification.

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