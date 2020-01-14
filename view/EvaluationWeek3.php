<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="style.css">
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
            <h2>Week 3:</h2>

            <div class="well">
                <p>Currently the API in my website only uses one element of the CRUD operations, retrieve (although this will change in the future). It’s used for retrieving the filtered articles in the database and displaying them onto the webpage. My implementation of this feature also utilises AJAX JavaScript that was created during Week 2.</p>

                <p>When the page initially loads on the users browser it will fetch all of the articles in the database. This is now done by using the API Function <i>getAllArticles()</i>. The <i>$articletxt</i> variable is a string in the JSON format. This will contain the returned results from the databse query in the <i>$rows</i> variable. This variable is then decoded on the <i>index</i> page and create the data structure for the article thumbnails to be displayed.</p>
                
                <p>When filtering the articles, it works in a similar fashion. When using the date filter at the top of the page, it calls the <i>showArticles()</i> function. This selects the Articles by the date value found within the date filter, and displays them to the user. </p>


                <h4>index.php</h4>
                <img class="img-responsive" src="Pictures/EvaluationWeek3/index.png">
                <h4>script.js</h4>
                <img class="img-responsive" src="Pictures/EvaluationWeek3/script.png">
                <h4>api-coursework.php</h4>
                <img class="img-responsive" src="Pictures/EvaluationWeek3/api.png">
                <h4>FilteredArticles.php</h4>
                <img class="img-responsive" src="Pictures/EvaluationWeek3/filteredarticles.png">
                <br>
                <p>By implementing a JSON API in my website it has cleaned the structure of the website. Created an abstraction to what the user can see on their PC, tablet or phone and the server/database back-end of the site.</p>

                <p>By having the JSON API, it can also allow for the functions used for retrieving the filtered articles on other languages, not only PHP and JavaScript, such as C, C#, Python, Perl amongst many others.</p>

                <p>This is a huge advantage as it can add extra potential functionality to the website in the future if any of those languages’ features/elements can be used. </p>

                <p>The readability of the code that parses through the database has been improved, mainly by separating the files and using the JSON format, rather than plain PHP code.</p>

            </div>
        </div>
        <div class="container">
            <?php include 'footer.php'; ?>
        </div>
        <script src="script.js"></script>

    </body>
</html>