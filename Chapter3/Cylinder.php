<?php

require_once 'NonCuboidShape.php';

class Cylinder extends NonCuboidShape
{
    /**
    * Calculate the volume [V=pi*r^2*h]
    * @return float
    */
    public function volume(): float
    {
        return pi() * pow($this->dimensions['radius'], 2) * $this->dimensions['height'];
    }
}