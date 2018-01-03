<?php
class Car {

    public $tank;

    /** Add fuel to the tank function */
    public function fill($float)
    {
        $this-> tank += $float;

        return $this;
    }

    /** consumption function subtract fuel from the tank as we ride the car. */
    public function ride($float)
    {
        $km = $float;
        $liter = $km/14; /** 14 km/l */
        $this-> tank -= ($liter);

        return $this;
    }
}

/** Create a new object from the Car class. */
$bmw = new Car();

/** Add 50 liter of fuel, then ride 140 km, the tank is empty before filling!
get the number of liter in the tank. */
$tank = $bmw -> fill(50) -> ride(140) -> tank;

/** Print the results to the screen. */
echo "liters left in the tank: " . $tank . " liter.";
