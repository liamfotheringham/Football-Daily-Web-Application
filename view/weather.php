<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <title>Number one for football news | Football Daily</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="sidenavstyle.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script> 
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
    </head>

    <body>
        <div class="container">
            <!--Display Header-->
            <?php include 'header.php'; ?>
            <div>
                <div class ="row">
                    <div class='col-md-6 col-sm-6 col-xs-6'>
                        <h2>Weather Select:</h2>
                        <!--Select City-->
                        <form class = "form-group" method="post">
                            <h3>Select City: <input type="text" name="City" id="SelectedCity"><input class="btn btn-primary" name="submit" type="submit"></h3>
                        </form>
                    </div>
                </div>    

                <div class ="row">
                    <?php

                    include("../model/api-external.php");

                    //If submit button is clicked select city
                    if(isset($_POST["submit"])){
                        $weathertext = weatherSelect($_POST['City']);
                    }

                    //If not select London
                    else{
                        $weathertext = weatherSelect('London');
                    }

                    //Call displayweather function
                    displayWeather($weathertext);

                    //Displays the weather values
                    function displayWeather($weathertext){

                        //Decode JSON
                        $weatherjson = json_decode($weathertext);
                        
                        //If there isnt a result
                        if($weatherjson == Null){
                            echo "<div class='col-md-12 col-sm-12 col-xs-12'>";
                                echo "<h1>City Not Found</h1>";
                            echo "</div>";
                        }
                        
                        //iif there is a result
                        else{

                            //Round/change values
                            $mintemp = round(($weatherjson -> main -> temp_min) - 273.15);
                            $maxtemp =  round(($weatherjson -> main -> temp_max) - 273.15);
                            $currenttemp =  round(($weatherjson -> main -> temp) - 273.15);
                            $windspeed = round(($weatherjson -> wind -> speed) * 2.237);

                            //Display values
                            echo "<div class='col-md-3 col-sm-6 col-xs-6'>";
                            echo  "<h3>" . $weatherjson -> name. ", UK</h3>";
                            echo  "<h4>" . date('l') ." ". date('H:i') ." </h4>";
                            echo  "<h4>" . $weatherjson -> weather[0] -> main. " </h4>";
                            echo  "<img src='http://openweathermap.org/img/w/" . $weatherjson -> weather[0] -> icon . ".png' height='80' width='80'>";
                            echo  "<h1 class='inline'>" . $currenttemp . "°C</h1>";
                            echo "</div>";

                            echo "<div class='col-md-3 col-sm-6 col-xs-6'>";
                            echo "<br><h4>Humidity: " . $weatherjson -> main -> humidity. "% </h4>";
                            echo "<h4>Wind: " . $windspeed. " mph </h4>";
                            echo "<h4>" . $maxtemp . "°C / " . $mintemp . "°C </h4>";
                            echo "</div>";

                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="container">
            <!--Display Footer-->
            <?php include 'footer.php'; ?>
        </div>
        
        <script src="../controller/sidenavscript.js"></script>
    </body>
</html>