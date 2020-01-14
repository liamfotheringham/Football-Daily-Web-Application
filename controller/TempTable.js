$(document).ready(function(){
    refreshTable();
    //refreshChart();
});

//Refresh Table
function refreshTable(){
    $('#TempTable').load('../controller/getTable.php', function(){
        setTimeout(refreshTable, 10);
    });
};

//Refresh Table
function refreshChart(){
    $('#TempChart').load('../controller/getChart.php', function(){
        setTimeout(refreshTable, 10);
    });
};