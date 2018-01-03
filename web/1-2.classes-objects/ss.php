<?php
class Toys{
    public $toys_name;
    public $toys_category;
    public static $shop_name;

    function Toys($name,$category) {
        $this->toys_name = $name;
        $this->toys_category = $category;
    }

    public function getToyName() {
        return $this->toys_name;
    }
    public function getToyCategory() {
        return $this->toys_category;
    }
    public function getToyShop_nonStatic() {
        return self::getToyShop();
    }
    public static function getToyShop() {
        return self::$shop_name;
    }
    public static function setToyShop($shopname) {
        self::$shop_name=$shopname;
    }
}

$objToys = new Toys("Battery Car","Battery Toys");
$toys_name = $objToys->getToyName();
$toys_category = $objToys->getToyCategory();
echo "<br/>Toy: " . $toys_name . ", Category: " . $toys_category;

Toys::$shop_name = "Disney";
$shop_name = Toys::getToyShop();
echo "<br/>Shop Name: " . $shop_name;

Toys::setToyShop("ToyShop");
$shopname = Toys::getToyShop_nonStatic();
echo "<br/>Shop Name via non static function: " . $shopname;
?>