<?php

abstract class DbP {
    const DBHOST = 'localhost';
    const DBUSER = 'nobody';
    const USERPWD = 'test';
    const DB = 'yaddaSecVariant';
    const DSN = "mysql:host=".self::DBHOST.";dbname=".self::DB;
}