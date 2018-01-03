<?php
class Car {
    public function hello() {
        return "beep";
    }
}
class SportsCar extends Car {
    public function hello() {
        return "Hallo";
    }
}
$sportsCar1 = new SportsCar();
echo $sportsCar1 -> hello();
/** we can avoid this by using Final in parent class! */
?>