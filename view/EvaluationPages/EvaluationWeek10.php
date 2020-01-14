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
            <h2>Week 10:</h2>
            <h3><b>Task: </b>Report in 400 words on the method you have used in execution of the task. Comment on the suitability of this app for the mobile device.</h3>
            <div class="well">
                <h3>Round-Up</h3>
                <p>At the end of last week, the Electric Imp data was outputted in a simple table. However, now it is displayed through a more interesting method using jQuery Mobile, PHP and AJAX. Aswell as this a <i>Chart.js</i> has been used to create a line graph of the data.</p>
            </div>
            <div class="well">
                <h3>jQuery Mobile</h3>
                <p>First of all, the application was changed from using the Bootstrap Framework to jQuery Mobile to satisfy the needs of the requirements. This enabled the use of the benefits of the jQuery mobile tables. The tables in jQuery mobile can have collapsible columns, so not all of the screen real-estate is used by the application with data that is not necessary. These columns can also be prioritised, meaning that only the most necessary will display when the page is loaded. A button is available to the user where they can select columns that they may wish to see that aren’t visible and equally collapse those that they do not wish to see. <small>Note: the use of AJAX limits this features functionality</small></p>
            </div>
            <div class="well">
                <h3>High/Low Values</h3>
                <p>In the tutorial it was also asked if the table can have different colours to show high or low values in the table. This was done by having an if statements within the PHP that builds the table. If the value of the temperature is above a certain value, then the background colour is changed to red and the font white. Likewise, if it is too low then it is changed to a blue background with a white font. This was done by creating two classes in the CSS file that have these attributes, and the if statement echoes the table elements with either of the classes depending on their values.</p>
            </div>
            <div class="well">
                <h3>AJAX</h3>
                <p>The tutorial also requested that the table be loaded through AJAX to display the most recent values within the database. This was done by separating the page into two PHP scripts. One script held the method of creating the table that displays the data. The other page displays the table in the application. The AJAX script refreshes the page that creates the table every ten seconds, so that the most recent data is displayed.</p>
            </div>
            <div class="well">
                <h3>Graph</h3>
                <p>A suitable Javascript library was found that will enable the results of the Electric IMP to be visualised as a graph. Chart.js was used for this and works by echoing the script in PHP, echoing the values of the JSON string into the correct areas. This could not be used in AJAX as it redraws too often and crashes the web application, however, it will update the table if the user refreshes the page.</p>
            </div>
            <div class="well">
                <h3>Advantages</h3>
                <p>jQuery Mobile utilises HTML5 to help create web applications that are accessible on all different types of devices. Utilising both jQuery, jQuery UI and AJAX  it offers an environment that allows seamless and easy to use systems that can be easily accessed on Mobile Devices.</p>
                
                <p>jQuery Mobile allows webpages to screens of different sizes and resolutions which means its more accessible to more people and their devices.</p>
                
                <p>It also allows for the collapsible menus that will either appear or disappear depending on the importance of the data within the elements. The importance of the data is specified by the developer in the HTML.</p>
                
                <p>Themes can also be applied without changing code using the ‘ThemeRoller’ tool. This can also be used to create new custom themes.</p>
                
            </div>
            
            <div class="well">
                <h3>Code</h3>
                <h4>electricimp.php</h4>
                <img class="img-responsive" src="../Pictures/EvaluationWeek10/page.png">
                <h4>getTable.php</h4>
                <img class="img-responsive" src="../Pictures/EvaluationWeek10/table.png">
                <h4>getGraph.php</h4>
                <img class="img-responsive" src="../Pictures/EvaluationWeek10/graph.png">
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>