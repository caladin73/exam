<?php
foreach ($_POST as $key => $value)
    $$key = $value;

$file = 'cars.xml';
$cars = simplexml_load_file($file);     // read xml into object

$id = 0;
foreach ($cars as $car)                 // find highest id
    if ($car['id'] > $id)
        $id = $car['id'];
$id++;                                  // increment highest id for use

$car = $cars->addChild('car');
$car->addAttribute('id', $id);
$car->addAttribute('year', $year);
$car->addAttribute('manufacturer', $manufacturer);
$car->addAttribute('model', $model);
$car->addChild('meter', $miles);
$car->addChild('color', $color);
$car->addChild('price', $price);
$dealersecurity  = $car->addChild('dealersecurity');
$dealersecurity->addAttribute('buyback', $buyback);

$cars->asXML($file);

header('Location: ./readCars.php');
