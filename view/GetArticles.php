<?php

//connection details
$servername = "lochnagar.abertay.ac.uk";
$server_username = "sql1601596";
$server_password  = "97tcemOSezyM";
$dbname = "sql1601596";

/*$servername = "localhost";
$server_username = "root";
$server_password = "";
$dbname = "coursework";*/

$conn = mysqli_connect($servername, $server_username, $server_password, $dbname);

include("../model/api-coursework.php") ;

if($_POST['Date']!==""){
    $articletxt = getArticleByDate($_POST['Date']) ;
    $articlejson = json_decode($articletxt);
    echo $articlejson[0] -> 
    
}

else{
    $articletxt = getAllArticles();   
    $articlejson = json_decode($articletxt);
}

$conn->close();
?>