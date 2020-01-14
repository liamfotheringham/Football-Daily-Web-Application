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

            <!--Latest News-->
            <div class="latestnews" style="background-color: black">
                <h1 style="color: yellow">Latest News</h1>
                <?php

                $articletxt = latestArticles();
                $articlejson = json_decode($articletxt);

                for($i = 0; $i < sizeof($articlejson); $i++){
                    //start row
                    if($i % 3 == 0){
                        echo "<div class='row'>";
                    }
                    
                    //display article values
                    echo "<div class='col-md-4 col-sm-4 col-xs-12'>";
                    echo "<img class='img-responsive' src=' " .$articlejson[$i] -> Thumbnail. "' style = 'max-height: 180px' height = 200px width = '320px'>";
                    echo "<h4><span style='color: yellow' class = 'headline'>" . $articlejson[$i] -> Headline. " </span><a class='white' href=ViewPost.php?id=". $articlejson[$i] -> ArticleID .">" . $articlejson[$i] -> ThumbnailDesc. "</a></h4>";
                    echo "<p style='color: white'>" . $articlejson[$i] -> PublishDate. " | " . $articlejson[$i] -> Username. "</p>";
                    echo "</div>";
                    
                    //end row
                    if($i % 3 == 2){
                        echo "</div>";
                    }
                }
                ?>
            </div>
            <br>

            <!--Other News-->
            <div class="well">
                <h1>Other News</h1>

                <!--Date Filter-->
                <form>
                    <h3>Date Filter: <input type="date"  id="SelectedDate" onchange="showArticle(this.value)"><input class="btn btn-primary" type="button" value="Reset Filter" onClick="window.location.reload()"></h3>
                </form>

                <!--Where result of article filter goes-->
                <div id ="Articles">
                    <?php

                    $articletxt = getAllArticles();
                    $articlejson = json_decode($articletxt);

                    for($i = 0; $i < sizeof($articlejson); $i++){
                        //start row
                        if($i % 3 == 0){
                            echo "<div class='row'>";
                        }

                        //display article values
                        echo "<div class='col-md-4 col-sm-4 col-xs-12'>";
                        echo "<img class='img-responsive' src=' " .$articlejson[$i] -> Thumbnail. "' style = 'max-height: 180px' height = 200px width = '320px'>";
                        echo "<h4><span class = 'headline'>" . $articlejson[$i] -> Headline. " </span><a href=ViewPost.php?id=". $articlejson[$i] -> ArticleID .">" . $articlejson[$i] -> ThumbnailDesc. "</a></h4>";
                        echo "<p>" . $articlejson[$i] -> PublishDate. " | " . $articlejson[$i] -> Username. "</p>";
                        echo "</div>";

                        //end row
                        if($i % 3 == 2){
                            echo "</div>";
                        }
                    }
                    ?>
                </div>
            </div>

            <!--RSS Feeds-->
            <div>
                <h2>RSS Feeds</h2>
                <!--Football Daily RSS Feed-->
                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <div class = 'well'>
                        <h2>Football Daily</h2>
                        <h3>Link to your site <a href="../model/RSS.xml">here</a></h3>
                        <?php
                        //load xml file
                        $xml = simplexml_load_file('../model/RSS.xml');
                        
                        //Loop 5 times
                        for($i=0; $i < 5; $i++) {
                            
                            //Look at item
                            $current = $xml->channel->item[$i] ;
                            
                            //echo values
                            echo "<a href='".$current -> link."'><span><h4><strong>".$current -> title."</strong> ";
                            echo  $current -> description . "</h4></span></a>";
                            echo "<p>By " . $current -> author . "</p>";
                            //echo "<p>Published " . $current -> publish . "</p>";
                            echo '<br/>' ;
                        }
                        ?>
                    </div>
                </div>

                <!--Reddit Soccer External RSS Feed-->
                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <div class = 'well'>
                        <h2>Reddit /r/soccer</h2>
                        <?php
                        //load external xml file
                        $xml = simplexml_load_file('https://www.reddit.com/r/soccer/new.rss');
                        
                        //Loop 5 times
                        for($i=0; $i < 5; $i++) {
                            
                            //Look at item
                            $current = $xml->entry[$i] ;
                            
                            //echo values
                            echo "<a href='".$current -> link["href"]."'><h4>".$current -> title."</h4></a>";
                            echo "<p>By <a href='".$current -> author -> uri."'>" . $current -> author -> name . "</p></a>";
                            //echo "<p>Last Updated " . $current -> updated . "</p>";
                            echo '<br/>' ;
                        }

                        ?> 
                    </div>
                </div>

                <!--BBC Sport XSLT Feed 'Man Utd'-->
                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <div class = 'well'>
                        <h2>BBC Sport (XSLT)</h2>
                        <?php
                        //load external xml file
                        $xml = simplexml_load_file("http://feeds.bbci.co.uk/sport/football/rss.xml") ;
                        
                        //load xsl file
                        $xsl = simplexml_load_file("../model/reddevils.xsl");
                        
                        //Create processor
                        $proc = new XSLTProcessor() ;
                        
                        //Import stylesheet
                        $proc->importStyleSheet($xsl);
                        
                        //Get result
                        $result = $proc->transformtoXML($xml);
                        
                        //If theres no data from BBC News then say so
                        if(sizeof($result) === 0){
                            echo "<h4>No News Just Now</h4>";
                        }
                        
                        //Echo result
                        else{
                            echo $result;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!--Display Footer-->
            <?php include 'footer.php'; ?>
        </div>
        <!--Script tags-->
        <script src="../controller/script.js"></script>
        <script src="../controller/sidenavscript.js"></script>
    </body>
</html>