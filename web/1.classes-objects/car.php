<?php
/**
 * Created by PhpStorm.
 * User: Peter_Laptop
 * Date: 18-12-2017
 * Time: 13:34
 */

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

    public static function getPowers()
    {
        return self::$power;
    }
}

car::$power = 180;

$aCar = new Car( "Mercedes", "Green");
$aCar->showCars();

$aCar = new Car( "BMW", "Blue");
$aCar->showCars();

$aCar = new Car( "Audi", "Orange");
car::$power = 240;
$aCar->showCars();



?>
