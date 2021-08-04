<?php
    require "DBquery.php"; 
    echo "<script>console.log('pelllo');</script>";
    echo "Pello";
    $categoryType = $_POST["categoryType"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];

    addHistory($categoryType, $to, $amount);
?>

