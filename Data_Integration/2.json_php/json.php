<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 11-06-2018
 * Time: 18:01
 */


$myObj = new stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";
$myJSON_object = json_encode($myObj);


$myArr = array("John", "Mary", "Peter", "Sally");
$myJSON_arr = json_encode($myArr);


echo $myJSON_object . "<br>" . $myJSON_arr;