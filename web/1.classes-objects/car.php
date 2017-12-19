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
    public $power = 100;

    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
        $this->power = 100;
        //self::$power = 200;
    }

    public function showCars()
    {
        echo "<dl>";
        echo "<dt>Model:</dt><dd>$this->model</dd >";
        echo "<dt>Color:</dt><dd>$this->color</dd >";
        echo "<dt>Horse Power:</dt><dd>". self::$power. "</dd >";
        echo "<dt>Horse Power:</dt><dd>". self::$power. "</dd >";
        echo "</dl>";
    }

}

Car::$power = 200;
$aCar = new Car( "Mercedes", "Green");
$aCar->showCars();
$aCar = new Car( "BMW", "Blue");
$aCar->showCars();
$aCar = new Car( "Audi", "Orange");
car::$power = 240;
$aCar->showCars();



?>
