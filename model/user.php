<?php
session_start();
if(empty($_SESSION)){
    header("location: ../view/login.php");
}
$query = "select * from user";
$user = getAll($query);
?>