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
            <h2>Week 3:</h2>
            <h3><b>Task: </b>Discuss how you have implemented an API within your ‘article’ database table. Using some of your code as examples, indicate what advantage the API gives to your software. Is the API a good idea?</h3>
            <div class="well">
                <h3>Implementation</h3>
                <p>Currently the API in my website only uses one element of the CRUD operations, retrieve (although this will change in the future). It is used for retrieving the filtered articles in the database and displaying them onto the webpage. My implementation of this feature also utilizes some AJAX JavaScript that was created during Week 2.</p>

                <p>When the page initially loads on the users browser it will fetch all of the articles in the database. This is now done by using the API Function <i>getAllArticles()</i>. The <i>$articletxt</i> variable is a JSON string. This will contain the returned results from the database query in the <i>$rows</i> variable. This variable is then decoded on the <i>index</i> page and create the data structure for the article thumbnails to be displayed.</p>

                <p>When filtering the articles, it works in a similar fashion. When using the date filter at the top of the page, it calls the <i>showArticles()</i> function. This selects the Articles by the date value found within the date filter, and displays them to the user. </p>
            </div>
            <div class="well">
                <h3>Code</h3>
                <h4>index.php</h4>
                <img class="img-responsive" src="../Pictures/EvaluationWeek3/index.png">
                <h4>script.js</h4>
                <img class="img-responsive" src="../Pictures/EvaluationWeek3/script.png">
                <h4>api-coursework.php</h4>
                <img class="img-responsive" src="../Pictures/EvaluationWeek3/api.png">
                <h4>FilteredArticles.php</h4>
                <img class="img-responsive" src="../Pictures/EvaluationWeek3/filteredarticles.png">
                <br>
            </div>    
            <div class="well">
                <h3>Advantages</h3>

                <p>By having a JSON API implemented into the football daily web application, it has given the application many benefits. Firstly, it has cleaned up the structure of the of the web applications source code.</p>
                
                <p>By having the API functions stored in a separate file, functions of the application do not need to be included in the main application, only referred to as the API file is referred to as an include statement. This has also allowed for an abstraction from the client and server end of the application. None of the PHP functions will be stored within the client end of the application.</p>
                
                <p>By having the API return data in a JSON String, it can allow the data to be used in other languages not only PHP and JavaScript. The JSON String can be utilised in languages such as C, C#, Python, Perl amongst many others. This is a huge advantage to implementing the API as it can add extra potential functionality to the website in the future if any of those languages’ features/elements can be used.</p>
                
                <p>The readability of the source code within the application that parses through the database has also been improved. This is also due to the separation of the files and utilising the JSON format, rather than have all the data in one page and using PHP variables.</p>

            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>