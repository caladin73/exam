<?php
class Car {
    private $model;
    public function setModel($model) {
        $this -> model = $model; }

    public function getModel() {
        return $this -> model; }
}

class SportsCar extends Car{
    private $style = 'fast and furious';

    public function driveItWithStyle() {
        return 'Drive a '  . $this -> getModel() . ' <i>' . $this -> style . '</i>'; }
}
$sportsCar1 = new SportsCar();
$sportsCar1 -> setModel('Ferrari');
echo $sportsCar1 -> driveItWithStyle();

/*
output:
Drive a Ferrari fast and furious
*/

?>