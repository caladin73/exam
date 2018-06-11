<?php
$url = 'http://api.statbank.dk/v1/data/folk1c/JSONSTAT?valuePresentation=Default&Tid=*';
$chandle = curl_init($url);
$urlnew = 'data.json';
$a = [];

curl_setopt($chandle, CURLOPT_RETURNTRANSFER, true); //Sets an option on the given cURL session handle.
$res = curl_exec($chandle);
curl_close($chandle);


$obj = json_decode($res); // converts JSON string into a PHP variable

createNewJson($obj, $a, $urlnew);

//make new JSON with as value pair index:value
function createNewJson($o, &$a, &$urlnew) {
    $k = '';
    $i = 0;
    foreach($o->dataset->value as $x) {
        $nml = (array)($o->dataset->dimension->Tid->category->index);
        foreach($nml as $key => $value) {
            if ($value === $i) {
                $k = $key;
            }
        }
        $aa = array('label' => $k, 'population' => $x);
        array_push($a, $aa);
        $i++;
    }
    $json = json_encode($a); // array of objects to JSON
    file_put_contents($urlnew, $json); //save new JSON to file data,json
}