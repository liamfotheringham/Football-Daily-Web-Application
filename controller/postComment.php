<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

include("../model/api-coursework.php") ;

$comment = $_POST['Comment'];

$txt = insertComment($_SESSION['CurrentArticle'], $_SESSION['Username'], $comment);

?>