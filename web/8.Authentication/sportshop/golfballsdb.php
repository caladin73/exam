<?php
    require_once './includes/DbP.inc.php';
    require_once './includes/DbH.inc.php';
    require_once './includes/Sellable.inc.php';
    require_once './includes/Golfball.inc.php';

    $dbh = DbH::getDbH();

    $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $imagetype = $_FILES['img']['type'];

    $sql = "INSERT INTO image (imageitself) VALUES ('".$image."')";
    $dbh->query($sql);




?>