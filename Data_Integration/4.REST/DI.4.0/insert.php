<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$countrycode = $_POST["countrycode"];
$language = $_POST["language"];
$isofficial = $_POST["isofficial"];
$percentage = $_POST["percentage"];

$dbh = DbH::getDbH();
$sql = "INSERT INTO countrylanguage (countrycode, language, isofficial, percentage) VALUES ('$countrycode', '$language', '$isofficial', '$percentage')";
$res = $dbh->query($sql);

echo "record successfully inserted into database";
echo "<br>";
var_dump($sql);