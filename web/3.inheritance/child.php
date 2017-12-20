<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 12:12
 */

// The parent class has its properties and methods
class Car {

    //A private property or method can be used only by the parent.
    private $model;

    // Public methods and properties can be used by both the parent and the child classes.
    public function setModel($model)
    {
        $this -> model = $model;
    }

    public function getModel()
    {
        return $this -> model;
    }
}


//The child class can use the code it inherited from the parent class,
// and it can also have its own code
class SportsCar extends Car{

    private $style = 'fast and furious'; // child class own property

    public function driveItWithStyle() //added method in child class
    {
        return 'Drive a '  . $this -> getModel() . ' <i>' . $this -> style . '</i>';
    }
}


//create an instance from the child class
$sportsCar1 = new SportsCar();

// Use a method that the child class inherited from the parent class
$sportsCar1 -> setModel('Ferrari');

// Use a method that was added to the child class
echo $sportsCar1 -> driveItWithStyle();

?>