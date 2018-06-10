<?php
$json = file_get_contents('data.json');
$res = json_decode($json, true);

$a = array();
$b = array();

$reslength = count($res);

    for($x = 0; $x < $reslength; $x++) {
        $out["label"] = $res[$x]['label'];
        $out["population"] = $res[$x]['population'];
        if ($x < "1") {
            $out["diff"] = "NA";
            $out["procent"] = "NA";
        } else {
            $out["diff"] = $res[$x]['population']-$res[$x-1]['population'];
            $out["procent"] = number_format((((float)($res[$x]['population']-$res[$x-1]['population']))/$res[$x-1]['population'])*100, 2) . "%";
        }
        array_push($a, $out);
    }

$content = json_encode($a);
file_put_contents('cal.json', $content);
//echo $content;

