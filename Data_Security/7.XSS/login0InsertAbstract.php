<?php
session_start();
require_once('DbH.inc.php');
$dbh = DbH::getDbH();

if (count($_POST) != 4) {
    header('Location: ./login0p1.php?missingFormData'.count($_POST));
} else {
    foreach ($_POST as $key => $value) {
        $$key = $value;
    }
    $now = time();
    $sql = "insert into abstract";
    $sql .= " (entered, enteredby, authors, reftitle, abstract)";
    $sql .= " values (";
    $sql .= sprintf("from_unixtime(%s), '%s', '%s', '%s', '%s'", $now, $user, $authors, $title, $abs);
    $sql .= ");";
    try {
        $s = $dbh->prepare($sql);
        $s->execute();
    } catch (PDOException $e) {
        die(sprintf("Unexpected error<br/>%s<br/>\n", $e->getMessage()));
    } finally {
        header('Location: ./login0p1.php?success');
    }
}