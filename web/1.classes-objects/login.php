<?php
/**
 * Created by PhpStorm.
 * User: Peter_Laptop
 * Date: 19-12-2017
 * Time: 06:51
 */

// Declare the class
class Member
{
    // properties
    public $username = "";
    private $loggedIn = false;

    // method that login
    public function login() {
        $this->loggedIn = true;
    }

    // method that logout
    public function logout() {
        $this->loggedIn = false;
    }

    // method that check if logged in
    public function isLoggedIn() {
        return $this->loggedIn;
    }
}

// Create an instance, a member Peter
$member = new Member();
$member->username = "Peter";

// check if member is logged in = false
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
// ?: used in the example above is the ternary operator. It's like a compact version of an if ... else statement.



// login member
$member->login();

// check if member is logged in = true
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

// log out member
$member->logout();

// check if member is logged in = false
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

/*
this will output:
Peter is logged out
Peter is logged in
Peter is logged out
*/


?>