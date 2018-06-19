<?php
/**
 * DbP.inc.php
 * @author nml
 * @copyright (c) 2018, nml
 * @license http://www.fsf.org/licensing/ GPLv3
 */
/*
abstract class DbP {
    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const USERPWD = '';
    const DB = 'yaddasecvariant';
    const DSN = "mysql:host=".self::DBHOST.";dbname=".self::DB;
}



abstract class DbP {
    const DBHOST = 'localhost';
    const DBUSER = 'maintainer';
    const USERPWD = 'test';
    const DB = 'yaddasecvariant';
    const DSN = "mysql:host=".self::DBHOST.";dbname=".self::DB;
}

*/
abstract class DbP {
    const DBHOST = 'localhost';
    const DBUSER = 'reader';
    const USERPWD = 'test';
    const DB = 'yaddasecvariant';
    const DSN = "mysql:host=".self::DBHOST.";dbname=".self::DB;
}
