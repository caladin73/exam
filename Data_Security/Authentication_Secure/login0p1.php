<?php
session_start();
if (!
(isset($_SESSION['demoLoginId']) &&
    $_SESSION['demoLoginId'] != '') ) {
    header("Location: ./login0.php?err=notAllowed");
    exit();
}
?><!doctype html>
<html>
<head>
    <title>Login Demo  Page 1</title>
    <meta charset='utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>
<body>
<h1>Page 1 - You're In</h1>
<p>
    Go back to
    <a href='./login0.php'>Forside</a>
</p>
</body>
</html>