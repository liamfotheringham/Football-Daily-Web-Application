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
            <h2>Week 12:</h2>
            <h3><b>Task: </b>Comment on the process of using external RSS feeds to your site. What do you see as the main advantage of using XSLT – outline 2 of these.</h3>
            <div class="well">
                <h3>What is XSLT?</h3>
                <p>There is are a three RSS feeds on the Football Daily web application. One feed is that of the articles from the Football Daily website, another is an external RSS Feed of the www.reddit.com/r/soccer forum. This week practical the task was to implement an external feed of the website using XSLT(EXtensibleStylesheet Language for Transformations). XSLT is used to translate an XML file into valid HTML, which can be read and displayed to a web application. Unlike most programming languages that indicates how a process in placed upon a data set, XSLT finds a piece of the DOM that it would be interested in and should have a process of what should happen when a match occurs. It operates in a sense when a match is found then do this sequence of commands.</p>
            </div>
            <div class="well">
                <h3>Dedicated Processor</h3>
                <p>XSLT processing has its own dedicated processor on the client-side. The processor takes the XML file that it is designated to, its XSLT stylesheet and processes them to create a HTML output, which in turn can be displayed in the webpage. The use of a dedicated processor means that the time in which a document can be processed is much faster with its intended purpose. As XSLT is a declarative language, the processor speeds up the process in which a match can be found in the  file it is to parse and process. By not having to process a sequence of actions in finding a certain pattern and what to do when it is found, the XSLT will process the pattern when it is found to the specification outlined in the template (no matter how it is found). This way is much faster when used in a correct manner, however, if used lazily it can be slower to process than using imperative approaches to processing data.</p>
            </div>
            <div class="well">
                <h3>Data Seperation/Template</h3>
                <p>An output can be easily altered by modifying transformation rules in the stylesheet. This doesn’t require the change of the target file to be parsed and processed by the stylesheet. This is because the XML and XSLT is separated (Data from Presentation), which makes the process of outputting the data to the DOM easy and without having to touch any of the code in the presentation layer. This gives the developer of websites that implement XSLT the benefit of not having to change multiple files to change a small nuance within the websites design or presentation of data.</p>
            </div>
        </div>
        <div class="container">
            <?php include '../footer.php'; ?>
        </div>
        <script src="/controller/script.js"></script>

    </body>
</html>