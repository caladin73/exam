<?php
class Car{
    public function company()
    {
        echo "BMW ";
    }

    public function model()
    {
        echo "M5";
    }
}
/**To create object we have to use a  new operator.
$obj is the object of the Car dlass. */
$obj = new Car();
$obj->company();
$obj->model();
?>
