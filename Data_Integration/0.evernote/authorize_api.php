<?php

require "autoload.php";

//set this to false to use in production
$sandbox = true;
$oauth_handler = new \Evernote\Auth\OauthHandler($sandbox);

// Config
$key      = 'houdek8a-6942';
$secret   = '33c4741f347e24b0';
$callback = 'http://localhost/research/index.php';

// Auth
$oauth_data  = $oauth_handler->authorize($key, $secret, $callback);

?>