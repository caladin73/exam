<?php
abstract class Car {
    /** Abstract classes can have properties */
    protected $tankVolume;
    protected $model;

    /** Abstract classes can have non abstract methods */
    public function setTankVolume($volume)
    {
        $this->tankVolume = $volume;
    }
}

class Honda extends Car {
    /** Since we inherited abstract method, we need to define it in the child class, by adding code to the method's body. */
    public function calcNumKmOnFullTank()
    {
        $km = $this->tankVolume*18;
        return $km;
    }
}

class Toyota extends Car {
    /** Since we inherited abstract method, we need to define it in the child class, by adding code to the method's body. */
    public function calcNumKmOnFullTank()
    {
        return $km = $this->tankVolume*12;
    }

    public function getColor()
    {
        return "beige";
    }
}
/** create a new car object with a tank volume of 50 liter and return the km it can run on the volume */
$honda = new Honda();
$honda -> setTankVolume(50);
echo get_class($honda). ": ";
echo $honda->calcNumKmOnFullTank();
echo " Km in tank" ."<br>";

/** create a new car object with a tank volume of 60 liter and return the km it can run of the volume */
$toyota1 = new Toyota();
$toyota1 -> setTankVolume(60);
echo get_class($toyota1). ": ";
echo $toyota1 -> calcNumKmOnFullTank();
echo " Km in tank, color: ". $toyota1->getColor(); /** get color as set in child class */
