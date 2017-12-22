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
}

// Create instances (object)
$bmw = new Car ();
$mercedes = new Car ();

// Set the values
$mercedes -> color = "Green";
$mercedes -> company = "Mercedes Benz";

$bmw -> company = "BMW";
$bmw -> color = 'Blue';
$bmw -> hasSunRoof = false; //change the default value of sunroof from true to false

//get the values
echo $mercedes -> company. "<br>"; // BMW
echo $mercedes -> color ."<br>"; // Green
echo 'Has sunroof: '.(boolval($mercedes -> hasSunRoof) ? 'yes' : 'no'). "<br><br>"; //checks if sunroof is set to true or false

echo $bmw -> company. "<br>"; // BMW
echo $bmw -> color ."<br>"; // Blue
echo 'Has sunroof: '.(boolval($bmw -> hasSunRoof) ? 'yes' : 'no'). "<br><br>"; //checks if sunroof is set to true or false
?>