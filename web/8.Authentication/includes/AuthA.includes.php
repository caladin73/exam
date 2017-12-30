<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 30-12-2017
 * Time: 10:13
 */

/**
 * Abstract class for the login mechanism.
 * it uses mainly static methods and it has no constructor because it does not need one.
  */
abstract class AuthA {
    const SESSVAR = 'nAuth42';
    protected $userId;
    protected static $logInstance = NULL;


    public static function isAuthenticated() {
        return isset($_SESSION[self::SESSVAR]) ? true : false;
    }

    private static function setTestCookie() {
        setcookie('foo', 'bar', time() + 3600);
    }

    public static function areCookiesEnabled() {
        //self::setTestCookie();
        return (isset($_COOKIE['foo']) && $_COOKIE['foo'] == 'bar') ? true : false;
    }

    public static function logout() {
        session_start();
        session_unset();
        session_destroy();
        session_write_close();
        setcookie(session_name(), '', 0, '/');
        session_regenerate_id(true);
    }

    abstract protected function dbLookUp($user, $passwordattempt);

    protected function getUserId() {
        return $this->userId;
    }
}