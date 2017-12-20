<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 08:43
 */

class Car {

    public $tank;

    // Add liters of fuel to the tank when we fill it.
    public function fill($float)
    {
        $this-> tank += $float;

        return $this;
    }

    // Substract liters of fuel from the tank as we ride the car.
    public function ride($float)
    {
        $km = $float;
        $liter = $km/14; // how far does it ride on 1 liter = 14 km
        $this-> tank -= ($liter);

        return $this;
    }
}

// Create a new object from the Car class.
$bmw = new Car();

// Add 50 liter of fuel, then ride 140 km, the tank is empty before fulling!
// and get the number of liter in the tank.
$tank = $bmw -> fill(50) -> ride(140) -> tank;

// Print the results to the screen.
echo "The number of liters left in the tank: " . $tank . " liter.";

?>