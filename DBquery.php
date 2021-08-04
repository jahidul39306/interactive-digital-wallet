<?php
require "DBconnect.php";

function getHistory()
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM digital-wallet");
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function addHistory($categoryType, $to, $amount)
{
    echo $categoryType;
    echo $to;
    echo $amount;
    $date = new DateTime();
    $time = $date->format("Y-m-d H:i:s");
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO digital-wallet (categoryType, to, date, amount) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", strval($categoryType), strval($to), strval($time), strval($amount));
    return $sql->execute();
}
?>