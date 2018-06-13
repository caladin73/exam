<?php

echo "How hash + salt works, update page a few time!<br><br>";

$password = "goat";
echo "Password :" . $password . "<br><br>";

echo password_hash($password, PASSWORD_DEFAULT) . "<br>";
echo password_hash($password, PASSWORD_DEFAULT) . "<br>";
echo password_hash($password, PASSWORD_DEFAULT) . "<br><br>";


echo "See how hashed 'goat' is the same and salt is random!<br><br>";

$salt = random_bytes(8);
echo $salt . "<br>";
echo crypt('mypassword', $salt); // let the salt be automatically generated