<?php

namespace App\LiskovSubstitution;

class Rectangle
{

    protected float $width;
    protected float $height;


    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function area(): float|int
    {
        return $this->width * $this->height;
    }
}