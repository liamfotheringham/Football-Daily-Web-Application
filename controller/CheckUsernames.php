<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

include("../model/api-coursework.php");

if(!isset($_POST['Username']) || empty($_POST['Username'])){
    echo '1';
}
else{

    $username = trim($_POST['Username']); 

    $txt = checkUsername($username);
    $json = json_decode($txt);


    if(sizeof($json) > 0){
        echo '1';
    }
    else{
        echo '0';
    }
}
?>