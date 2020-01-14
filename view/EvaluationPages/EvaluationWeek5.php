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
            <h2>Week 5:</h2>
            <h3><b>Task: </b>Select 4 security features for the form allowing trusted users to enter their articles. Comment on these 100 words for each.</h3>
            <div class="well">
                <h3>'Reporter' Session</h3>
                <p>In order for a user to access the upload articles page, the  $_SESSION[‘Reporter’] value needs to equal ‘Reporter’. This value is only set when a user that is a reporter logs into the website . When logging into the site, the isReporter bit value from the WebDevUsers table is retrieved. If this value is set as 0 then the session is not set, if it is 1 then the session is set to ‘Reporter’ and the user can access the page. If a user is to type the URL for uploading the articles, without having the session set to the correct value then they are redirected to the homepage.</p>
            </div>
            <div class="well">
                <h3>Checking Field Values</h3>
                <p>When the articles page loads, it is disabled until certain requirements are met. It checks the length of the Headline, Description and Thumbnail inputs and checks to see if their lengths are within a suitable range. Using a JavaScript function enableSubmit, it get the length of the input boxes by getting the individual Ids using document.getElementById().value.length. this returns the length of the input boxes. Using the onchange function within JavaScript also, the enableSubmit function is called each time there is a change in either of the input boxes, checking their values. When the conditions have been met, then the button is enabled and the user can submit the form as they wish. </p>
            </div>
            <div class="well">
                <h3>reCaptcha</h3>
                <p>reCaptcha is implemented into the upload articles page, so It can be authorized that a real person is uploading the article. By having reCaptcha, it can protect the site from spam or abusive use of the upload articles page from an attacker using bots. As reCaptcha is created by Google it can be assured that the sophistication of security levels that have been implemented into the it is top of the line. As stated on the reCaptcha documentation, it is not only a simple text distortion system, but uses more advanced risk analysis techniques, taking into consideration a user’s engagement with the captcha feature, and will evaluate a wide range of stages that can prevent bots from using the page.</p>
            </div>
            <div class="well">            
                <h3>Prepared Statements</h3>
                <p>By utilizing prepared statements when inserting the details of the wanted article, it will strip any special characters that may have been entered by the user, so it can be store in the database in clear text. If this was not utilized then any characters that are deemed to have any extra styling, will break retrieving the article or any articles that may be found in the same statement. When echoing the articles in their thumbnail form on the index page, none would display due to their being characters that PHP does not recognize, therefore breaking the script. Using prepared statements omits this issue.</p>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>