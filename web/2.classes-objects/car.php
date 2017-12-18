<?php
/**
 * Created by PhpStorm.
 * User: Peter_Laptop
 * Date: 18-12-2017
 * Time: 13:34
 */

class Car
{

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }


    public function showCars()
    {
        echo "<dl>";
        echo "<dt>Model:</dt><dd>$this->model</dd >";

    }
}

$aCar = new Car( "Audi");
$aCar->showCars();

?>
