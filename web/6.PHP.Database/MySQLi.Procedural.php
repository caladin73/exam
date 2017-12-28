<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 27-12-2017
 * Time: 16:43
 */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";