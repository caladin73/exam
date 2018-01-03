<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 27-12-2017
 * Time: 16:44
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conn";

/**
 * Notice that in PDO we have also specified a database (conn).
 * PDO require  a valid database to connect to.
 * If no database is specified, an exception is thrown.
 */
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

/**
 * A great benefit of PDO is that it has an exception class to handle any problems that may occur in our database queries. If an exception is thrown within the try{ } block, the script stops executing and flows directly to the first catch(){ } block
 */

setcookie(cookie_name, cookie_value, [expiry_time], [cookie_path], [domain], [secure], [httponly]);