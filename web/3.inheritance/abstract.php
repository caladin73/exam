<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 14:22
 */

abstract class Car {
    // Abstract classes can have properties
    protected $tankVolume;
    protected $model;

    // Abstract classes can have non abstract methods
    public function setTankVolume($volume)
    {
        $this -> tankVolume = $volume;
    }
}

class Honda extends Car {
    // Since we inherited abstract method, we need to define it in the child class,
    // by adding code to the method's body.

    public function calcNumKmOnFullTank()
    {
        $km = $this -> tankVolume*12;
        return $km;
    }
}

class Toyota extends Car {
    // Since we inherited abstract method, we need to define it in the child class,
    // by adding code to the method's body.
    public function calcNumKmOnFullTank()
    {
        return $km = $this -> tankVolume*18;
    }

    public function getColor()
    {
        return "beige";
    }
}

$honda = new Honda();
$honda -> setTankVolume(50);

echo get_class($honda). ": ";
echo $honda -> calcNumKmOnFullTank();
echo " Km in tank" ."<br>";

$toyota1 = new Toyota();
$toyota1 -> setTankVolume(60);

echo get_class($toyota1). ": ";
echo $toyota1 -> calcNumKmOnFullTank();
echo " Km in tank, color: ". $toyota1 -> getColor();


?>