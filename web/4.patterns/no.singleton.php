<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 23-12-2017
 * Time: 20:04

 *Connect db without a singleton.
 */
class ConnectDbWOSingleton {
    private $conn;

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'conn';

    // Public constructor.
    public function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    name={$this->name}", $this->user,$this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public function getConnection()
    {
        return $this->conn;
    }
}


/**
 * Now, each time I create a new object, I also establish a new database connection.
 */

$instance = new ConnectDbWOSingleton();
$conn = $instance->getConnection();
var_dump($conn);

echo "<br>";

$instance = new ConnectDbWOSingleton();
$conn = $instance->getConnection();
var_dump($conn);

echo "<br>";

$instance = new ConnectDbWOSingleton();
$conn = $instance->getConnection();
var_dump($conn);

/**
 * This has implications for slowing down the system because each new connection with the database costs time.
 */

