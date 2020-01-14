<?php

include("../model/api-coursework.php") ;

//If filter isnt blank
if($_POST['Date']!==""){
    //Display articles from that date
    $articletxt = getArticleByDate($_POST['Date']) ;
    $articlejson = json_decode($articletxt);
    
}

//If not
else{
    //Display all articles
    $articletxt = getAllArticles();   
    $articlejson = json_decode($articletxt);
}

$conn->close();
?>