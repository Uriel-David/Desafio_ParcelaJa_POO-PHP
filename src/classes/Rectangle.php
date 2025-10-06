<?php
declare(strict_types=1);

namespace src\classes;

use src\classes\Shape;

/**
 * Class Rectangle
 * Represents a rectangle that inherits from Shape.
 */
class Rectangle extends Shape
{
    /** Shape type (2 = Rectangle) */
    public const TYPE = 2;

    /**
     * Rectangle constructor.
     *
     * @param float $length Length
     * @param float $width  Width
     */
    public function __construct(float $length, float $width)
    {
        parent::__construct($length, $width);
        $this->name = 'Rectangle';
    }
}
