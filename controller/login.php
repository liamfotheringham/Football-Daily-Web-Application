<?php

ini_set('display_errors','On');
error_reporting(E_ALL);

include("../model/api-coursework.php") ;

$username = $_POST['Username'];
$password = $_POST['Password'];
$txt = loginUser($username, $password) ;
?>