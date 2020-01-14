<script src="../controller/Chart.js"></script>
<?php 
    //ini_set('display_errors','On');
    //error_reporting(E_ALL);
?>

<link rel="stylesheet" href="../view/style.css">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

<body>
    <!--Display Electric IMP Table-->
    <?php require '../controller/getTable.php';?>
    <!--Display Electric IMP Chart-->
    <?php require '../controller/getChart.php';?>
</body>

<!--Include Scripts/Style Sheets-->
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<script src="../controller/TempTable.js"></script>