<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

// TO DO: Implement code to test logic
use src\classes\interfaces\ShapeInterface;
use src\classes\Circle;
use src\classes\Rectangle;

/**
 * Demonstração do uso das classes que implementam ShapeInterface
 */

/** @var ShapeInterface[] $shapes */
$shapes = [
    new Rectangle(10, 5),
    new Circle(7),
];

// Exibir informações e áreas de todas as formas
foreach ($shapes as $shape) {
    echo "Forma: {$shape->getObjectInfo()->name}" . PHP_EOL;
    echo "Área: " . $shape->getArea() . PHP_EOL;
    print_r($shape->getObjectInfo());
    echo str_repeat('-', 40) . PHP_EOL;
}
