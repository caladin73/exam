<?php
session_start();
require_once('DbH.inc.php');
$dbh = DbH::getDbH();
//Example 45.10. Authentication Code, the Wrong Way
//sql injection vulnerable
if (count($_POST) > 0) {
    $sql = "SELECT *";
    $sql .= " FROM user";
    $sql .= " WHERE uid = '". $_POST['user'] ."'";
    $sql .= " AND pwd = '" . md5($_POST['password']) . "'";
    echo $sql . "<br>";
    //die();
    //try {
        $s = $dbh->prepare($sql);
        $s->execute();
        $obj  = $s->fetch(PDO::FETCH_OBJ);
        if ($obj) {
            $_SESSION['demoLoginId'] = $obj->uid;
            header("Location: ./login0.php?success");
        } else {
            unset($_SESSION['demoLoginId']);
            header("Location: ./login0.php?err=noSuccess");
        }
    //} catch (PDOException $e) {
        die(sprintf("Unexpected error<br/>\n", $e->getMessage()));
    //}
//} else {
    header("Location: ./login0.php?err=noData");
}