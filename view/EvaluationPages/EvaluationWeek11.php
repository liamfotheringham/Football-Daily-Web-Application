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
            <h2>Week 11:</h2>
            <h3><b>Task: </b>The evaluation for this week is to describe the use of RSS  / Atom on your site. Also consider how you could use an external RSS / Atom feeds within your site.</h3>
            <div class="well">
                <p>Two RSS feeds have been implemented into the web application. One contains the data from the web application through an XML file and the other contains data from www.reddit.com/r/soccer through an XML file. An XML file was created for the application which contains the relevant data for articles within the web application. This XML file contains the:</p>
                <ul>
                    <li>Title</li>
                    <li>Link</li>
                    <li>Description</li>
                    <li>Author</li>
                    <li>Publish Date</li>
                    <li>Image URL</li>
                    <li>Image Title</li>
                    <li>Image Link </li>
                </ul>
                <p>The RSS feed uses XML Version 1.0, UTF-8 Encoding and RSS Version 2.0. The values are retrieved from the XML file and are displayed into the web applications homepage closer to the bottom of the page in a column. It will display the first five article values in the XML file and display them to the page. The values are displayed by using a PHP script to echo the relevant values onto the page. The script will echo the Title of the article, its description, the publish date and the author of the article. The title of the article will also be a link to the article, which will lead them to the full article in the web application</p>
                <p>There is also the external XML file that’s values are received. This XML file looks at the most recent values from the /r/soccer feed on reddit and outputs the relevant values onto the Football Daily web application. The Reddit xml file is rather large and difficult to follow and not all of the value is used within the web application. These values are:</p>
                <ul>
                    <li>Title</li>
                    <li>Link</li>
                    <li>Author Name</li>
                    <li>Author Link</li>
                    <li>Last Update</li>
                </ul>
                <p>Similar to the feed that displays Football Daily’s articles, the /r/soccer feed is displayed to the users through a PHP script. The script echoes the most recent 5 posts made to the /r/soccer forum and displays the relevant values to the Football Daily web application. The posts are displayed next to the Other RSS feed, in a column near the bottom of the homepage using a similar form of style as well. The link to the article will be over the title of the post, as well as there being a link over the author/link to their reddit profile.</p>
                <p>To make the Football Daily RSS feed userful to users, it would need to be updated wheneever an article has been uploaded, much like in the Reddit external feed.</p>

            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>