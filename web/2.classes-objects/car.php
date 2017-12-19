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

    public function __construct($model, $color, $power)
    {
        $this->model = $model;
        $this->color = $color;
        $this->power = $power;
    }

    public function showCars()
    {
        echo "<dl>";
        echo "<dt>Model:</dt><dd>$this->model</dd >";
        echo "<dt>Color:</dt><dd>$this->color</dd >";
        echo "<dt>Horse Power:</dt><dd>". self::$power. "</dd >";
    }

    public static function getPowers()
    {
        return self::$power;
    }
}

//Car::$power = 100;
$aCar = new Car( "Audi", "Blue");
$aCar->showCars();




?>
