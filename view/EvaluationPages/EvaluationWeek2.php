<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="../style.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    </head>

    <body>
        <div class="container">
            <?php include 'header-evaluation.php'; ?>
            <h2>Week 2:</h2>
            <div class="well">
                <h3><b>Task 1.</b>Include the design of your database with some comments as to why this is a good design and in 3NF</h3>
                <img class="img-responsive" src="../Pictures/EvaluationWeek2/UntitledDiagram.png">
                <p>In the websites current state this database design is efficient at storing and receiving data. As the website get updated with more features in the future this design will need to be reviewed and updated. This can include more entities or having relationships between entities change where necessary. As the site grows in scope, the number of tables, entities, attributes and relationships will grow too. </p>

                <p>The database design is in the third normal form (3NF) as there are no transitive dependencies between the tables. However to get the database into this state was fairly simple, at a larger scale, which it will eventually become, I can imagine keeping the database in 3NF more difficult, with there being more attributes for there to be concern for how there placed within the database, and their relationships between tables.</p>
            </div>
            <div class="well">
                <h3><b>Task 2.</b>Explain how you create a summary of the article to display in the initial page for the newspaper edition.</h3>
                <div class="row">
                    <div class='col-xs-12'>
                        <img class="img-responsive" src="../Pictures/EvaluationWeek2/ArticleThumb.png">

                        <p>In the database, the <i>Article</i> Table stores all the details for the articles:</p>
                        <ul>
                            <li><b>ArticleID: </b>This is an ID that uniquely identifies each article stored in the database. This isn’t displayed onto the page but is used in the PHP for retrieving the articles from the database.</li>
                            <li><b>Headline: </b>This stores the main headline for the article.</li>
                            <li><b>Thumbnail: </b>This stores the link to the image that will be used for displaying on the front page of the website.</li>
                            <li><b>ThumbnailDesc: </b>This elaborates on the headline and what the content within the article is.</li>
                            <li><b>PublishDate: </b>This displays the date that the article is pushed to the website and database.</li>
                            <li><b>ReporterID: </b>This will display the Reporter of the articles handle on the website, this may be changed to their full name in the future, depending on the direction of the website.</li>
                        </ul>

                        <img class="img-responsive" src="../Pictures/EvaluationWeek2/AJAXScreen.png" style = 'max-height: 400px'>
                        <p>A combination of AJAX and PHP is used to create the summaries of the Articles on the website. The AJAX script detects if there is a date selected in the filter. It will send that date value to the PHP page through the method that can be seen above. The articles are displayed within the div tag that contains the ID <i>Articles</i>.</p>

                        <img class="img-responsive" src="../Pictures/EvaluationWeek2/PHPScreen.png" style = 'max-height: 400px'>    
                        <p>In the PHP a connection to the database is established first. A query on the database is then used to attain the elements from the <i>Articles</i> Table. If a result is returned that is greater than 0, then whilst the query receives results it will print out data to the page. Inside a while loop the HTMl that creates the summaries of each article is echoed. If a date isn't selected (i.e if the date filter is left blank) then all of the articles are selected and are echoed on to the webpage.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="script.js"></script>

    </body>
</html>