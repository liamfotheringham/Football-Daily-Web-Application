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
            <h2>Week 13:</h2>
            <h3><b>Task: </b>Comment the design of the external API/RestWS and how you used it within your site. The API/RestWS should have an api-key. Indicate how you obtained this, how you use this and what is there to stop a third-party using your api-key and potentially charging your account.</h3>
            <div class="well">
                <h3>Design of the External API</h3>
                <p>The API implemented into the web application is a weather widget. The API used is from the website openweathermap.org. This gives many weather readings from over 400000 cities across the globe, with readings from 40000 weather stations. The API utilises the ReST solution when wishing to call a function of the API, like so:</p>
                <p>api.openweathermap.org/data/2.5/weather?q={city name},{country code}</p>
                <p>This will call current weather data from one location, which can be sent back in either JSON, XML or HTML format.</p>
            </div>
            
            
            <div class="well">
                <h3>How I Utilise the API</h3>
                <p>In my web application the user can search for the current weather data in any city in the UK using a search box. This will call an external API function which appends the city name to the API call seen below:</p>
                <br><img class="img-responsive" src = "../Pictures/EvaluationWeek13/431c94d8fe02193968f008534ac1885d.png"><br>
                <p>This function returns all of the weather data from the selected city in JSON format and the application outputs the following:</p>
                <br><img class="img-responsive" src = "../Pictures/EvaluationWeek13/Weather.png"><br>
                <p>The temperature data is interpreted a Kelvin, therefore, is converted to Celsius. The Wind speed is interpreted as metres per second but has been converted to miles per hour.</p>
                <p>The ID of the image used is returned as a code, but is echoed in an <img> tag in the PHP script so the image can be outputted like so:</p>
                <p><strong>echo &lt; img src='http://openweathermap.org/img/w/" . $weatherjson -> weather[0] -> icon . ".png' height='80' width='80'&gt;;</strong></p>
            </div>
            
            
            <div class="well">
                <h3>How I Obtained the API Key</h3>
                <p>The API key is only obtainable if you sign up for the website. An account was created so an API key could be obtained to use the functionalities of the API. The API key is then given to users of the site once they have created an account. A user can create as many keys as they like with an account for the Current Weather API and the 5 days/3 hour forecast.</p>
            </div>
            
            
            
            <div class="well">
                <h3>How I Utilise the API Key</h3>
                <p>As seen in the screenshot of the weatherSelect function, the API key is appended at the end of the URI, which is used to identify what user account is trying to access the API function. This will be to see if the User has the correct permissions for accessing that API, and to mitigate the access from bots etc.</p>
            </div>
            
            
            <div class="well">
                <h3>Stopping Third-Parties from Obtaining API Key</h3>
                <p>There are many ways in which you can hide the API key from users from Third-Parties, who may wish to charge the users account (if possible). The best way when using an APACHE HTTP Server is to use a .htaccess file. They provide a way to make config files for each directory within the server. The config file is placed into a document directory, which all of the directives apply of that directory and  subdirectories. The config file cannot be tracked from the root file a third-party would be accessing from. This config file would store the data of the API key and would limit the access from third-parties to its data. However, this cannot be implemented into this system as we do not have access to the .htaccess file of the server as its a shared resource.</p>
                <p> Therefore, in this instance the API Key cannot be reached by the user from the browser using the inspect element tool, as the key is hidden in the function of the API. This is really the best security that can be relied on</p>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>