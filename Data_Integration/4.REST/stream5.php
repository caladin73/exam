<?php
/*
 * stream5.php
 */
$d = file_get_contents('file2');
foreach ($_POST as $key => $value)
    $d .= $value . "\n";
file_put_contents('file2', $d);