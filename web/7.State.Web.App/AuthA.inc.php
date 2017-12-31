<?php

require_once 'AuthI.inc.php';

abstract class AuthA implements AuthI {
    protected static $sessvar = 'yAuth58'; /** if set = logged on */
    protected static $logInstance = false;
    protected $userId;
    
    protected function __construct($user) {
        $this->userId = $user;
    }
        
    public function getUserId() {
        return $this->userId;
    }

    /** checks if user is logged in, by seeing is $sessvar set to userID in Authentication.inc.php
     * return true or false  */
    public static function getLoginId() {
        return isset($_SESSION[self::$sessvar]) ? $_SESSION[self::$sessvar] : 'nobody';
    }

    /** checks if user is authenticated and return true or false */
    public static function isAuthenticated() {
      return isset($_SESSION[self::$sessvar]) ? true : false;
    }
    
    public static function isAdministrator() {
    }

    /** logout function, that closes the session and cookie */
    public static function logout() {
        setcookie(session_name(), '', 0, '/');
        session_unset();
        session_destroy();
        session_write_close();
        unset($_SESSION[self::$sessvar]);
    }

    abstract public static function authenticate($user, $pwd);
    abstract protected static function dbLookUp($user, $pwd);
}