<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 08:18
 */

// Declare the class
class Car {

    // properties
    public $company;
    public $color = 'beige';
    public $hasSunRoof = true;

    // method that says hello
    public function hello()
    {
        return "beep";
    }
}

// Create an instance
$bmw = new Car ();
$mercedes = new Car ();

// Set the values
$mercedes -> color = "Green";
$mercedes -> company = "Mercedes Benz";

$bmw -> company = "BMW";
$bmw -> color = 'Blue';
$bmw -> hasSunRoof = false; //change the default value of sunroof from true to false

//get the values
echo "Company: " . $mercedes -> company. "<br>"; // BMW
echo $mercedes -> color ."<br>"; // blue
echo 'Has sunroof: '.(boolval($mercedes -> hasSunRoof) ? 'true' : 'false'). "<br><br>"; //uses an

echo "Company: " . $bmw -> company. "<br>"; // BMW
echo $bmw -> color ."<br>"; // blue
echo 'Has sunroof: '.(boolval($bmw -> hasSunRoof) ? 'true' : 'false'). "<br><br>";

// Use the methods to get a beep
echo $bmw -> hello(). "<br>"; // beep
echo $mercedes -> hello(); // beep

?>