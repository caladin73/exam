<?php

    session_start();
    if (isset($_SESSION['initiated'])) {
        session_regenerate_id(); // refreshes PHPSESSID
        $_SESSION['initiated'] = TRUE;
    }
