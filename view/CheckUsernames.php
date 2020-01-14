<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

include("../model/api-coursework.php");

$articletxt = getArticleByDate($_POST['Date']);
$articlejson = json_decode($articletxt);

for($i = 0; $i < sizeof($articlejson); $i++){
    echo: "<h5>Username Exists Already</h5>";
}

?>