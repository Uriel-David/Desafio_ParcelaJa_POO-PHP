<?php
declare(strict_types=1);

namespace src\classes\Interfaces;

/**
 * Interface ShapeInterface
 * Defines the contract that all geometric shapes must follow.
 */
interface ShapeInterface
{
    /**
     * Calculates and returns the area of the shape.
     *
     * @return float
     */
    public function getArea(): float;

    /**
     * Returns an object containing the main properties of the shape.
     *
     * @return object
     */
    public function getObjectInfo(): object;
}
