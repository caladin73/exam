<?php

abstract class AuthA {
  const SESSVAR = 'nAuth42';
  protected $userId;
  protected static $logInstance = NULL;

  /** here we get the user information from login in an array, and return true or false */
  public static function isAuthenticated() {
    return isset($_SESSION[self::SESSVAR]) ? true : false;
  }

  /** set cookies */
  private static function setTestCookie() {
    setcookie('foo', 'bar', time() + 3600);
  }

  /** checks if cookies is enable */
  public static function areCookiesEnabled() {
    self::setTestCookie();
    return (isset($_COOKIE['foo']) && $_COOKIE['foo'] == 'bar') ? true : false;
  }

  /** logout function, that close session and cookies */
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