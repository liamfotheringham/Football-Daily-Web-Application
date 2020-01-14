<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

include("../model/api-coursework.php");

if(!isset($_POST['Email']) || empty($_POST['Email'])){
    echo '1';
}
else{

    $email = $_POST['Email']; 

    $txt = checkEmail($email);
    $json = json_decode($txt);


    if(sizeof($json) > 0){
        echo '1';
    }
    else{
        echo '0';
    }
}
?>