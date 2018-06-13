<?php

// See the password_hash() example to see where this came from.
$hash = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

echo "<br>";
var_dump(defined("PHP_EOL"));
defined("PHP_EOL");

echo "1" . "<br>";
echo "2" . "\r\n";


echo "Line 1\r\n\r\nLine 2";

