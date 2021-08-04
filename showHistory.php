<?php
    require "DBquery.php";
    $data = getHistory();
    echo "<table border = 1>";
    echo "<tr>";
    echo "<th> Category type </th>";
    echo "<th> To </th>";
    echo "<th> Date </th>";
    echo "<th> Amount </th>";
    echo "<th> Time </th>";
    echo "</tr>";

    foreach($data as $row)
    {
        echo "<tr>";
        echo "<td>" . $row["category"];
        echo "<td>" . $row["reciever"];
        echo "<td>" . $row["date"];
        echo "<td>" . $row["amount"];
        echo "<td>" . $row["time"];
        echo "</tr>";
    }
    echo "</table>";
?>