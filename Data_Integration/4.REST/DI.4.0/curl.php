<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>DI.4.0</title>
    <link rel='stylesheet' href='css/mystyles.css'/>

</head>
<body>
<h1>curl url:</h1>

<p><b>Copy url link and run it in command line!</b></p>

<?php
require_once 'inc/DbP.inc.php';
require_once 'inc/DbH.inc.php';

// Replace space with +, when using it in URL
$countrycode = str_replace(' ', '+', $_POST["countrycode"]);
$language = str_replace(' ', '+', $_POST["language"]);
$isofficial = $_POST["isofficial"];
$percentage = str_replace(' ', '+', $_POST["percentage"]);

$actual_link = $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']) . "/insert.php";
$url = "curl -v -X POST http://". $actual_link . " -d" . " 'countrycode=" . $countrycode . "&language=" . $language . "&isofficial=" . $isofficial . "&percentage=" . $percentage . "'";
echo $url . "<br><br>";

// Det lykkes mig ikke at bruge denne løsning, hvor jeg ville bruge GET til at linke direkte til min insert.php
//echo "<b>Or click link to pass information to php page that will insert into database!</b><br><br>";
//echo  '<a href="insert.php?' . 'countrycode=' . $countrycode . '&language=' . $language . '&isofficial=' . $isofficial . '&percentage=' . $percentage . '"' . '>Link</a>';
?>


</body>
</html>