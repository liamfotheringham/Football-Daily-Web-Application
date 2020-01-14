<?php
session_start();

//function to get latest data weather data from selected city
function weatherSelect($City){
    
    $apikey = "";
    
    $content = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$City.",uk&appid=".$apikey);

    return $content;
}
?>