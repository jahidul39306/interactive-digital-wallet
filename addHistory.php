<?php
    require "DBquery.php"; 
    $categoryType = $_POST["categoryType"];
    $to = $_POST["to"];
    $amount = $_POST["amount"];

    addHistory($categoryType, $to, $amount);
?>

