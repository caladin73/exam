<?php
class Car {
    public $color;
    public $manufacturer;
}
//create new instance
$beetle = new Car();
$mustang = new Car();

//set values
$beetle->color = 'red';
$beetle->manufacturer = 'Volkswagen';
$mustang->color = 'green';
$mustang->manufacturer = 'Ford';


//print and show result with code
echo '<h2>Some properties: </h2>';
echo '<p> The Beetle’s color is ' . $beetle->color . '. </p>';
echo '<p> The Mustang’s manufacturer is ' . $mustang->manufacturer . '.</p>';
echo '<h2> The \$beetle Object: </h2><pre>';
print_r($beetle);
echo '</pre>';
echo '<h2>The \$mustang Object:</h2><pre>';
print_r($mustang);
echo '</pre>';
?>