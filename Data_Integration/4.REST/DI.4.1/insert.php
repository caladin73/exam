<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$name = $_POST["name"];
$countrycode = $_POST["countrycode"];
$district = $_POST["district"];
$population = $_POST["population"];

$dbh = DbH::getDbH();
$sql = "INSERT INTO city (name, countrycode, district, population) VALUES ('$name', '$countrycode', '$district', '$population')";
$res = $dbh->query($sql);

var_dump($res);
//SELECT * FROM city ORDER BY id DESC LIMIT 1;
//DELETE FROM city ORDER BY id DESC LIMIT 1;