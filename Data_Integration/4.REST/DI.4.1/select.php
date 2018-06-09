<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

$dbh = DbH::getDbH();
$q = $dbh->prepare("select * from city");
$q->execute();

//jeg fandt ud af at jeg er nød til at convert array før json_encode, ellers kommer der en fejl pga mærkelig tegn:
// "malformed utf-8 characters possibly incorrectly encoded"
//ved at bruge mb_convert_encoding kan jeg løse det
while($row = $q->fetch(PDO::FETCH_ASSOC))
{
    foreach($row as &$value)
    {
        $value = mb_convert_encoding($value, "UTF-8", "Windows-1252");
    }
    unset($value); # safety: remove reference
    $result[] = array_map('utf8_encode', $row );
}

$json = json_encode($result);

//gemmer array i json file, hvis json array er set ellers error msg
if ($json)
    file_put_contents('result.json', $json, header('Location: result.json'));
else
    echo json_last_error_msg();





