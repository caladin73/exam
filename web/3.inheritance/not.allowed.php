<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 20-12-2017
 * Time: 12:57
 */

// The parent class
class Car {
    //The $model property is private, thus it can be accessed only from inside the class
    private $model;
    //protected $model;

    //Public setter method
    public function setModel($model)
    {
        $this -> model = $model;
    }
}


// The child class
class SportsCar extends Car{

    //Tries to get a private property that belongs to the parent
    public function hello()
    {
        return "beep! I am a <i>" . $this -> model . "</i><br />";
    }
}

//Create an instance from the child class
$sportsCar1 = new SportsCar();

//Set the class model name
$sportsCar1 -> setModel('Mercedes Benz');

//Get the class model name
echo $sportsCar1 -> hello();

// Notice: Undefined property: SportsCar::$model in line 29
?>