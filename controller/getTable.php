<?php
include("../model/api-coursework.php");

//get json string from IMP
$datajson = file_get_contents("php://input");

//Insert data
if($datajson != ""){   
    $txt = insertData($datajson);
}

//get json string
$latestdatatxt = latestData();
//decode json string
$latestdatajson = json_decode($latestdatatxt);

//Display head of table
echo "<table data-role='table' data-mode='columntoggle' class='ui-responsive ui-shadow' id='TempTable'><thead><tr><th data-priority='4'>Device ID</th><th data-priority='1'>Date/Time</th><th data-priority='2'>External Temp</th><th data-priority='3'>Internal Temp</th></tr></thead><tbody>";

//For size of json string
for($i = 0; $i < sizeof($latestdatajson); $i++){
    
    //decode json string from database
    $databasejson = json_decode($latestdatajson[$i] -> data);
    
    //echo row, device id, datetiume stamp
    echo "<tr>
    <td>".$databasejson -> device."</td>
    <td>".$latestdatajson[$i] -> dttm."</td>";
    
    //If high value, make red 
    if($databasejson -> external >= 27.5){
        echo "<td class='red'>".$databasejson -> external."°C</td>";
    }
    //If low value, make blue
    elseif($databasejson -> external < 27){
        echo "<td class='grey'>".$databasejson -> external."°C</td>";
    }
    //Otherwise
    else{
        echo "<td>".$databasejson -> external."°C</td>";
    }
    
    //If high value, make red 
    if($databasejson -> internal >= 26.5){
        echo "<td class='red'>".$databasejson -> internal."°C</td>";
    }
    //If high value, make blue
    elseif($databasejson -> internal < 26){
        echo "<td class='grey'>".$databasejson -> internal."°C</td>";
    }
    //Otherwise
    else{
        echo "<td>".$databasejson -> internal."°C</td>";
    }
    //Close row
    echo"</tr>";
}

//Close table
echo "</tbody></table>";

?>