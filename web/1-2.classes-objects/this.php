<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 08:37
 */

class Car {

    // The properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    // The method that says hello
    public function hello()
    {
        // In order to approach the class properties we use $this
        return "Beep I am a <i>" . $this -> comp .
            "</i>, and I am <i>" . $this -> color;
    }
}

// We can now create an object from the class.
$bmw = new Car();
$mercedes = new Car();

// Set the values of the class properties.
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

// Call the hello method for the $bmw object.
echo $bmw -> hello();

?>