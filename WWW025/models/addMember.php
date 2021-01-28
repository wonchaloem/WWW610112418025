<?php
require "../modules/conDB.php";

$email = $_POST['email'];

try {
    $mysqli->autocommit(false);
    $sql = "INSERT INTO tb_member
            VALUES('$email','','',0)
            ";

    $mysqli->query($sql);
    $sql = "UPDATE tb_member 
    SET `name`='KAK', year = 2000 
    WHERE email = '$email'
    ";

    $mysqli->query($sql);

    $mysqli->commit();
} catch (Exception $e) {
    $mysqli->rollback();
    $e->getMessage();
}
