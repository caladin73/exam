<?php
require_once './DbP.inc.php';
require_once './DbH.inc.php';
$dbh = DbH::getDbH();
$sql = "select id, name, population";
$sql .= " from city";
$sql .= " where countrycode = 'DNK';";
$res = $dbh->query($sql);

$a = array();
foreach ($res as $out) {
    array_push($a, $out);
}

$xmit = json_encode($a);
header('Content-Type: application/json');
print($xmit);