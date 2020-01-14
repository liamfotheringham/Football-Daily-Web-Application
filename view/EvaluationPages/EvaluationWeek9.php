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
            <h2>Week 9:</h2>
            <h3><b>Task: </b>The task this week is to report in 400 words on the method you have used in execution of the task. Emphasis the database table you have used to store the data and comment on the advantage of using the system you have chosen.</h3>
            <div class="well">
                <h3>What it Does</h3>
                <p>This system allows the web application to display the most recent 10 values from a database that store the values received from the Electric IMP. These values are the ID, Device ID of the electric IMP, the time date of when the value was inserted into the Database, the internal temperature of the thermometer and the external temperature of the thermometer.</p>
            </div>
            <div class="well">
                <h3>How it Retrieves Data</h3>
                <p>The values are received from the Electric IMP every ten seconds and is sent over to the database where it is stored. Within the electric imp, the DeviceID, external temperature and internal temperature are stored as a JSON string. The JSON string is sent to the Database through a PHP script. The JSON string is sent to the Database and is stored in its own column. When the data is inserted, the the ID of the result is set, aswell as a timestamp of when the result was inserted.</p>
            </div>
            <div class="well">
                <h3>What it Displays</h3>
                <p>A page within the Web Application displays the ten most recent results from the Database in a table. This is done by using a SQL SELECT statement that selects rows by id in a descending order. A LIKE 10  is used at the end of the statement, to limit the select to the ten most recent rows.</p>
            </div>
            <div class="well">
                <h3>How it Processes the Data</h3>
                <p>As the data from the Electric Imp is stored as a JSON String within the database, this needs to be decoded in order for the data to be presented through the table within the web application. When the data is retrieved from the Database, the value column that stores the JSON string is sent through a json_decode function, which will separate it into the individual values. From there the data is displayed into each individual column within the table.</p>
            </div> 
            <div class="well">
                <h3>Advantages of this System</h3>
                <p>There are advantages to storing the data from the Electric IMP in this manner. Firstly, it reduces the number of columns needed in the Database in order to accommodate all of the data. By having the data stored as a JSON String, it reduces the number of columns required from five to three. This reduces data redundancy as there are less columns needed. This also means that is there is to be another value to be added to the database then it can easily be added to the JSON String and will be retrieved once decoded on the client side.</p>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>