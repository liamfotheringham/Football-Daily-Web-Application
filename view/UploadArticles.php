
<?php
//ini_set('display_errors','On');
//error_reporting(E_ALL);

session_start();
if($_SESSION['Reporter'] !="Reporter")
{
    header('Location: index.php');
}
?>

<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="style.css">
        <link href="sidenavstyle.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
        <link type="text/css" rel="stylesheet" href="../controller/JqueyTE/jquery-te-1.4.0.css">
        <script type="text/javascript" src="../controller/JqueyTE/jquery-te-1.4.0.min.js" charset="utf-8"></script>
    </head>

    <body>
        <div class="container">
            
            <!--Display Header-->
            <?php include 'header.php'; ?>
            <div class="well">
                <div class="row">
                    
                    <!--Inputs-->
                    <div class="col-sm-12 col-xs-12">
                        <form action="../controller/upload.php" method="POST" enctype="multipart/form-data">
                            <h1>Upload Article:</h1>
                            <h3>Headline:</h3><input id="headline" name="Headline" type="text" onchange="enableSubmit()">
                            <h3>Description:</h3><input id="description" name="Description" type="text" onchange="enableSubmit()">
                            <h3>Thumbnail:</h3>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <textarea id="textarea" name="textarea" class="jqte-test" onchange="enableSubmit()"></textarea>
                            <div class="g-recaptcha" data-sitekey="6LeSAHQUAAAAAGhD0BTaTZUiLJvYgWT9Xk7g2hcY"></div>
                            <button class='btn btn-primary' id='submitarticle' name='submit' type='submit' value='Submit' visibility = "hidden">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!--Display Footer-->
            <?php include 'footer.php'; ?>
        </div>
        <script src="../controller/script.js"></script>
        <script src="../controller/sidenavscript.js"></script>
        <script>
            $('.jqte-test').jqte();
            enableSubmit();
        </script>

    </body>
</html>