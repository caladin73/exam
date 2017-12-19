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
        echo "<dt>Power:</dt><dd>$this->power</dd >";
        //echo "<dt>Horse Power:</dt><dd>". self::$power. "</dd >";
    }

}

//Car::$power = 200;

$aCar = new Car( "Audi", "Blue");
$aCar->showCars();

//echo self::$power;
//echo Car::$power;



?>
