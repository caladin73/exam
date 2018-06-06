<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$dbh = DbH::getDbH();

$sql = "select id, name, population";
$sql .= " from city";
$sql .= " where countrycode = 'DNK';";
$res = $dbh->query($sql);

$a = array();

foreach ($res as $out) {
    array_push($a, $out);
}


/*
$arrlength = count($a);

for($x = 0; $x < $arrlength; $x++) {
    echo $a[$x][0] . " " . $a[$x][1] . " " . $a[$x][2] . "<br>";
}
*/

$content = json_encode($out);
var_dump($content);

die();


file_put_contents('examplejson2f.json', $content);

echo $content;