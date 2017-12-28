<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 27-12-2017
 * Time: 16:37
 */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";