<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 30-12-2017
 * Time: 13:24
 */

    session_start();
    require_once './includes/Authentication.includes.php';

    if (Authentication::isAuthenticated()) {
        Authentication::Logout();
    }
    header('Location: ./index.php?notAuth');