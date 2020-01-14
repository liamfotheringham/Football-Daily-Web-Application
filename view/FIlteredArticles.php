<?php 
include("../model/api-coursework.php");

$articletxt = getArticleByDate($_POST['Date']);
$articlejson = json_decode($articletxt);

for($i = 0; $i < sizeof($articlejson); $i++){
    echo "<div class='col-md-4 col-sm-4 col-xs-12'>";
        echo "<img class='img-responsive' src=' " .$articlejson[$i] -> Thumbnail. "' style = 'max-height: 180px' height = 200px width = '320px'>";
        echo "<h4><span class='headline'>" . $articlejson[$i] -> Headline. " </span><a href=ViewPost.php?id=". $articlejson[$i] -> ArticleID .">" . $articlejson[$i] -> ThumbnailDesc. "</a></h4>";
        echo "<p>" . $articlejson[$i] -> PublishDate. " | " . $articlejson[$i] -> ReporterID. "</p>";
    echo "</div>";
}

?>