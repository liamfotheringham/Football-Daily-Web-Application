<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="style.css">
        <link href="sidenavstyle.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    </head>

    <body>
        <div class="container">
            
            <!--Display Header-->
            <?php include 'header.php'; ?>
            
            <!--Display Article Details-->
            <?php

            $ArticleID = htmlspecialchars($_GET["id"]);
            $_SESSION['CurrentArticle'] = $ArticleID;
            $articletxt = viewPost($ArticleID);

            $articlejson = json_decode($articletxt);
            
            //If article exists
            if(sizeof($articlejson)!=0){
                echo "<h1><span class='headline'>" . $articlejson -> Headline . " </span>";
                echo  $articlejson -> ThumbnailDesc . "</h1>";
                echo "<hr>";
                echo "<h5>By ". $articlejson -> Username ."</h5>";
                echo "<h5><small>". $articlejson -> PublishDate ."</h5></small>";
                echo "<center><img class='img-responsive' src='" .$articlejson -> Thumbnail . "'></center><br>";
                echo  $articlejson -> Text;
            }
            
            //Otherwise
            else {
                echo "<h1>ERROR: Article Not Found</h1>";
                echo "<h2><a href='index.php'>Return to Home</a></h2>";
            }

            ?>

            <br>
            
            <!--Display Comment Section of article-->
            <?php

            $commenttxt = getArticleComments($ArticleID);
            $commentjson = json_decode($commenttxt);

            echo "<div class='container'>";
            
            //If user is logged in let user leave a comment
            if(isset($_SESSION['Username'])){

                echo '<form action="../controller/postComment.php" method="POST">';
                echo '<textarea class="input-lg" name="Comment" id="EnteredText" placeholder="Leave a comment" required="" type="text"></textarea><br>';
                echo '<button class="btn btn-primary" id="submitcommment" name="submit" type="submit" value="Submit">Comment</button>';
                echo '</form>';
                echo "<hr>";

                if(sizeof($commentjson) == 0){
                    echo "<div class='col-md-12 col-sm-12 col-xs-12 well'>";
                    echo "<h4> Be first to leave a comment</h4>";
                    echo "</div>";
                }

            }
            
            //If not tell them they need to login to leave a comment
            else{
                
                echo '<div class="col-md-12 col-sm-12 col-xs-12 well">';
                echo '<h4>Login to leave a comment</h4>';
                echo '</div>';
                echo "<hr>";
            }
            
            //Display all of the comments for the article
            for($i = 0; $i < sizeof($commentjson); $i++){
                echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
                echo "<div class='panel panel-default'>";
                echo " <div class='panel-heading'><h4>".$commentjson[$i] -> Username."<small><i> ".$commentjson[$i] -> UploadDate."</i></small></h4S></div>";
                echo " <div class='panel-body'><p>".$commentjson[$i]  -> Text."</p></div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
            ?>

        </div>
        <div class="container">
            <!--Display Footer-->
            <?php include 'footer.php'; ?>
        </div>
        <script src="script.js"></script>
        <script src="../controller/sidenavscript.js"></script>


    </body>
</html>