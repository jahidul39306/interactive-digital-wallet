<?php
    require "DBquery.php";
    $data = getHistory();
    echo "<table border = 1>";
    echo "<tr>";
    echo "<th> Category type </th>";
    echo "<th> To </th>";
    echo "<th> Date </th>";
    echo "<th> Amount </th>";
    echo "</tr>";

    foreach($data as $row)
    {
        echo "<tr>";
        echo "<td>" . $row["category"];
        echo "<td>" . $row["to"];
        echo "<td>" . $row["date"];
        echo "<td>" . $row["amount"];
        echo "</tr>";
    }
    echo "</table>";
?>