<?php
header("Content-Type: application/json; charset=UTF-8");

$con = mysqli_connect('localhost','root','','newworld');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$obj = json_decode($_GET["x"], false); //sync

mysqli_select_db($con,"newworld");

$sql="SELECT * FROM ".$obj->table." limit ".$obj->limit.";";
$result = mysqli_query($con,$sql);

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);
mysqli_close($con);

$content = json_encode($outp);

file_put_contents('cities.json', $content);
