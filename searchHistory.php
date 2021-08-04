<?php
    require "DBquery.php";
    $search = $_POST["search"];
    $data = searchHistory($search);
    if(empty($search))
    {
        echo "Enter a value to search";
    }
    else{
        if(empty($data))
        {
            echo "No search result found";
        }
        else{
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
        }
    }
?>