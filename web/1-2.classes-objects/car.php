<?php
class Car {

    private $model;
    private $color;
    public static $power;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function showCars()
    {
        echo "<dl>";
        echo "<dt>Model:</dt><dd>$this->model</dd >";
        echo "<dt>Color:</dt><dd>$this->color</dd >";
        echo "<dt>Horse Power:</dt><dd>". self::$power. "</dd >";
        echo "</dl>";
    }

}

Car::$power = 180;
$aCar = new Car( "Mercedes", "Green");
$aCar->showCars();

$aCar = new Car( "BMW", "Blue");
$aCar->showCars();

car::$power = 240;
$aCar = new Car( "Audi", "Orange");
$aCar->showCars();


?>
