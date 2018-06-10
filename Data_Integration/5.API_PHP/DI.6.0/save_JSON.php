<?php
$url = 'http://api.statbank.dk/v1/data/folk1c/JSONSTAT?valuePresentation=Default&Tid=*';
$chandle = curl_init($url);
$urlnew = 'data.json';
$a = [];

curl_setopt($chandle, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($chandle);
curl_close($chandle);

// receiced as a one line json string
$obj = json_decode($res); // unserialize to json obj
//prettyPrintForDebug($obj);   // comment out after debugging
createNewJson($obj, $a, $urlnew);
//prettyPrintForDebug($urlnew);

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
    $json = json_encode($a);            // array of objects to json
    file_put_contents($urlnew, $json);
}

