<?php

session_start();
$_SESSION['username'] = 'peter';

echo session_id() . "<br>";
echo $_SESSION['username'] . "<br>";
