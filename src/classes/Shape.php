<?php
declare(strict_types=1);

namespace src\classes;

use src\classes\Interfaces\ShapeInterface;

/**
 * Base class Shape
 * Represents a generic shape with common properties and behaviors.
 */
class Shape implements ShapeInterface
{
    /** @var string Shape name */
    public string $name;

    /** @var float Width (protected for inheritance) */
    protected float $width;

    /** @var float Length (protected for inheritance) */
    protected float $length;

    /** @var string Unique identifier (private) */
    private string $id;

    /** Shape type (1 = Shape) */
    public const TYPE = 1;

    /**
     * Base class constructor
     *
     * @param float $length Length
     * @param float $width  Width
     */
    public function __construct(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
        $this->id = uniqid('shape_', true);
        $this->name = 'Shape';
    }

    /**
     * Gets the shape ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets the shape ID.
     *
     * @param string $id
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Calculates and returns the area of the generic shape (length * width).
     *
     * @return float
     */
    public function getArea(): float
    {
        return $this->length * $this->width;
    }

    /**
     * Returns an object containing the main properties of the shape.
     *
     * @return object
     */
    public function getObjectInfo(): object
    {
        return (object) [
            'name' => $this->name,
            'width' => $this->width,
            'length' => $this->length,
            'id' => $this->id,
        ];
    }
}
