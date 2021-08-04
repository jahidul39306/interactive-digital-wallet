<?php
require "DBconnect.php";

function getHistory()
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM history");
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function addHistory($categoryType, $to, $amount)
{
    $date = new DateTime();
    $date = $date->format("Y-m-d");
    $time = strval(date("h:i:s"));
    $conn = connect();
    $sql = $conn->prepare("INSERT INTO history (category, reciever, date, amount, time) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss", $categoryType, $to, $date, $amount, $time);
    if($sql->execute())
    {
        echo "Transaction successful";
    }
}

function searchHistory($search)
{
    $conn = connect();
    $sql = $conn->prepare("SELECT * FROM history WHERE date = ? OR time = ?");
    $sql->bind_param("ss", $search, $search);
    $sql->execute();
    $res = $sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
?>