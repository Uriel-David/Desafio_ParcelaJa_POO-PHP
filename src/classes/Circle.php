<?php
declare(strict_types=1);

namespace src\classes;

use src\classes\Shape;

/**
 * Classe Circle
 * Representa um círculo que herda de Shape.
 */
class Circle extends Shape
{
    /** Tipo da forma (3 = Circle) */
    public const TYPE = 3;

    /** @var float Raio do círculo */
    protected float $radius;

    /**
     * Construtor do círculo.
     *
     * @param float $radius Raio do círculo
     */
    public function __construct(float $radius)
    {
        // Como o círculo não usa width/length, passamos 0
        parent::__construct(0, 0);
        $this->radius = $radius;
        $this->name = 'Circle';
    }

    /**
     * Calcula e retorna a área do círculo.
     *
     * @return float
     */
    public function getArea(): float
    {
        return pi() * ($this->radius ** 2);
    }

    /**
     * Retorna um objeto contendo as propriedades principais do círculo.
     *
     * @return object
     */
    public function getObjectInfo(): object
    {
        return (object) [
            'name' => $this->name,
            'radius' => $this->radius,
            'id' => $this->getId(),
        ];
    }
}
