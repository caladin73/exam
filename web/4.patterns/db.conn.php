<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 23-12-2017
 * Time: 19:47
 */

// Singleton to connect db.
class ConnectDb {
    // Hold the class instance.
    private static $instance = null;
    private $conn;

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $name = 'conn';

    // The db connection is established in the private constructor.
    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new ConnectDb();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }
}

/**
 * Since I use a class that checks if a connection already exists before it establishes a new one,
 * it really doesn't matter how many times I've create a new object out of the class, I still get the same connection.
 * To prove the point, I 've created three instances out of the class and var dump them.
*/

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

echo "<br>";

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

echo "<br>";

$instance = ConnectDb::getInstance();
$conn = $instance->getConnection();
var_dump($conn);

unset($conn);