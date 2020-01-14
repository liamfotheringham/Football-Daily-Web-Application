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
            <h2>Week 6:</h2>
            <h3><b>Task: </b>The task this week, to be added to your coursework, is to write a 400-word summary of what a framework does plus highlight some of the features of such a framework. Add this to your coursework site.</h3>
            <div class="well">
                <h3>Frameworks</h3>
                <p>Web frameworks are used to help aid in the development of web applications, especially web APIs. They provide a standard in which how web applications are built and deployed. Web frameworks will in some situations employ the use libraries, templating, session management, and the use of code reuse. Most implementations of frameworks are on dynamic websites; however, it must be said that they can also be deployed in static websites also.</p>
            </div>
            <div class="well">
                <h3>What is MVC?</h3>
                <p>MVC, aka Model-View-Controller is a design pattern/framework that is used in most dynamic web applications on the internet today. The framework separates the web application into separate areas, which all have different purposes.</p>

                <p><b>Model</b>: The model is the core element of the MVC Framework. The model is concerned with retrieving data from a database, packaging it into data objects, such as XML or JSON, which can then be interpreted by the view element. Most actions from the Model will be in response from a request from the Controller.</p>

                <p><b>View</b>: The view is where the data retrieved from the model is displayed for the user to see. This element of the framework processes the interface elements of the architecture, by selecting, filtering and arranging results from the model. The view can be present the data in many ways, implementing different views for different devices, etc.</p>

                <p><b>Controller</b>: The controller is how the user interacts with the application. Usually done by requests from the user, it calls for data to be used from the Model, which in hand will retrieve and process the requested data. The result of the request is then displayed in the specific view to the user.</p>
            </div>
            <div class="well">
                <h3>Implementation</h3>
                <p>Model:</p>
                <ul>
                    <li><b>api-coursework.php</b> - Contains all functions of the api</li>
                    <li><b>connection.php</b> - Contains database connection details</li>
                </ul>
                
                <p>View:</p>
                <ul>
                    <li><b>index.php</b> - The homepage of the web application</li>
                    <li><b>ViewPost.php</b> - Page for display each article</li>
                    <li><b>style.css</b> - Style Sheet for the application</li>
                    <li><b>UploadArticles.php</b> - Page for uploading articles to the application</li>
                </ul>
                <p>Controller:</p>
                <ul>
                    <li><b>CheckEmails.php</b> - Checks if entered email is taken already</li>
                    <li><b>CheckUsernames.php</b> - Checks if entered username is taken already</li>
                    <li><b>FIlteredArticles.php</b> - Get the articles that have been filtered by date</li>
                    <li><b>GetArticles.php</b> - Gets all of the articles</li>
                    <li><b>login.php</b> - Used to log a user into the system</li>
                    <li><b>postComment.php</b> - Posts a users comment to a article</li>
                    <li><b>register.php</b> - Used to register a user to the system</li>
                    <li><b>script.js</b> - All of the JavaScript and jQuery Scripts</li>
                    <li><b>upload.php</b> - Used to upload an article to the application</li>
                </ul>
            </div>
            <div class="well">
                <h3>Advantages</h3>
                <p>Much like separating HTML, CSS and JavaScript code into their own respective files, implementing an MVC Framework into a web application reduces complexity across the system and make it easier to maintain. It also allows the benefit of allowing change to happen to the system without having to make change to the logic of requesting data when wishing to change the interface.</p>

                <p>Creating a MVC Framework from scratch can also be a complex and laborious process. Therefore, many developers have created MVCs that any other developer can utilise. Examples of such MVCs include <b>Laravel</b>, <b>CodeIgniter</b>, <b>CakePHP</b> and many more. By eliminating the time it would take to implement your own MVC Framework and build its generic elements, more time can be dedicated to other tasks and functions within the web application whilst still having the benefits of MVC.</p>

                <p></p>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>