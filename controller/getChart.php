<?php
//include("../model/api-coursework.php");
ini_set('display_errors','On');
error_reporting(E_ALL);

//Echo canvas
echo"<canvas id='TempChart' width='400' height='400'></canvas>";

//Echo script
echo"<script>
var ctx = document.getElementById('TempChart').getContext('2d');
var myLineChart = new Chart(ctx, {
    type: 'line',

    // The data for our dataset
    data: {
        labels: [";
        //Loop through size of json string
        for($i = 0; $i < sizeof($latestdatajson); $i++){
            //Decode json
            $databasejson = json_decode($latestdatajson[$i] -> data);
            //if the last value
            if($i == sizeof($latestdatajson)){
                echo $latestdatajson[$i] -> id;
            }
            //otherwise
            else{
                echo $latestdatajson[$i] -> id . ", ";
            }
        }
    
        echo "],
        datasets: [{
            label: 'External Temps',
            backgroundColor: 'rgb(255, 255, 255, 0)',
            borderColor: '#f2323f',
            data: [";
            //Loop through size of json string
            for($i = 0; $i < sizeof($latestdatajson); $i++){
                //Decode json
                $databasejson = json_decode($latestdatajson[$i] -> data);
                //if the last value
                if($i == sizeof($latestdatajson)){
                    echo $databasejson -> external;
                }
                //otherwise
                else{
                    echo $databasejson -> external . ", ";
                }
            }

            echo "],
            },
            {
            label: 'Internal Temps',
            backgroundColor: 'rgb(255, 255, 255, 0)',
            borderColor: '#4286f4',
            data: [";
            //Loop through size of json string
            for($i = 0; $i < sizeof($latestdatajson); $i++){
                //Decode json
                $databasejson = json_decode($latestdatajson[$i] -> data);
                //if the last value
                if($i == sizeof($latestdatajson)){
                    echo $databasejson -> internal;
                }
                //otherwise
                else{
                    echo $databasejson -> internal . ", ";
                }
            }
            echo "],
            }]
    },

    // Configuration options go here
    options: {
        scales: {
            xAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Device ID'
                }
            }],
            yAxes: [{
                scaleLabel: {
                    display: true,
                    labelString: 'Temperature °C'
                }
            }]
        }     
    }
});</script>";

?>