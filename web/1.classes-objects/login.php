<?php
/**
 * Created by PhpStorm.
 * User: Peter_Laptop
 * Date: 19-12-2017
 * Time: 06:51
 */


class Member
{
    public $username = "";
    private $loggedIn = false;

    public function login() {
        $this->loggedIn = true;
    }

    public function logout() {
        $this->loggedIn = false;
    }

    public function isLoggedIn() {
        return $this->loggedIn;
    }
}

$member = new Member();
$member->username = "Peter";

echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
$member->login();
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
$member->logout();
echo $member->username . " is " . ( $member->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";

/*
this will output:
Peter is logged out
Peter is logged in
Peter is logged out

?: used in the example above is the ternary operator. It's like a compact version of an if ... else statement.
*/


?>