<?php
// serverNG.php
class Person {
    public $name;
    public $address;
    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }
    public function getName() { return $this->name; }
    public function getAddress() { return $this->address; }

    public function toString() {
        return sprintf("%s:\t %s\n", $this->name, $this->address);
    }
}

$arr = [];
$url = 'clients.json';
$verb = $_SERVER['REQUEST_METHOD'];
$name = isset($_GET['name']) ? $_GET['name'] : '';

switch ($verb) {
    case 'GET':
        getJson($url, $arr);
        if ($name) {
            printName($name, $arr);
        } else {
            printAll($arr);
        }
        break;

    case 'PUT':
        $putobj = json_decode(file_get_contents("php://input"), true);
        getJson($url, $arr);
        $p = new Person($putobj['name'], $putobj['address']);
        array_push($arr, $p);
        printAll($arr);
        putJson($url, $arr);
        break;

    case 'DELETE':
        deleteJson($url, $arr, $name);
        break;
        break;

    default:
        header("HTTP/1.1 ");
        header('Allow: GET, PUT, DELETE');
        break;
}

function getJson($url, &$arr) {
    $json = file_get_contents($url);    // string
    $json = json_decode($json);         // json array of objects

    foreach ($json as $person) {
        array_push($arr, new Person($person->name, $person->address));
    }
}

function putJson($url, &$arr) {
    $a = [];
    foreach($arr as $person) {
        $aa = array("name" => $person->name, "address" => $person->address);
        array_push($a, $aa);
    }
    $json = json_encode($a);            // array of objects to json
    file_put_contents($url, $json);
}

function printAll($arr) {
    foreach ($arr as $p) {
        print($p->toString());
    }
}

function printName($name, $arr) {
    foreach ($arr as $p) {
        if($p->getName() === $name)
            print($p->toString());
    }
}

function deleteJson($url, &$arr, $name){
    $newArr = [];
    $arr = json_decode(file_get_contents($url));
    foreach ($arr as $x) {
        if ($x->name != $name) {
            $newArr[] = $x;
        }
    }
    file_put_contents($url, json_encode($newArr));
}