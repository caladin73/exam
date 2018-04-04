<?php
$msg = "Today's weather forecast";
$tmp = rand(100, 290) / 10;
$precip = rand(0, 30);
$wind = rand(0,20);
$dir = array('N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW');
$windi = rand(0, count($dir)-1);
header('Content-Type: text/xml');
$formatString  = " %s %3.1f&#176; C,";
$formatString .= " %s mm,";
$formatString .= " %s m/s %s";
$s = "<?xml version='1.0'?><hallo>".$formatString."</hallo>";
printf($s, $msg, $tmp, $precip, $wind, $dir[$windi]);