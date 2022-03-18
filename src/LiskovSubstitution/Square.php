<?php

namespace App\LiskovSubstitution;

class Square extends Rectangle
{

//    Let q(x) be a property provable about objects of x of type T. Then q(y) should be provable for objects y of type S where S is a subtype of T.
//    In other word, The Liskov Substitution says that we shouldn't override methods that extended from parent
//    In this example Liskov Substitution is violated

    /**
     * @param float $height
     * @return void
     */
    public function setHeight(float $height): void
    {
        $this->width = $height;
        $this->height = $height;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
        $this->height = $width;
    }
}