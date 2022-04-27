<?php
    //make items inside center
    echo "<table style=\"text-align:center\">";
    //creates 100x100 table
    for ($i = 0; $i < 101; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 101; $j++) {
            //first empty cell
            if ($i == 0 && $j == 0) {
                echo "<th></th>";
            }
            //first row header
            elseif ($i == 0) {
                echo "<th>" . $j . "</th>";
            }
            //first column header
            elseif ($j == 0) {
                echo "<th>" . $i . "</th>";
            }
            //table cell values
            else {
                echo "<td>" . ($i * $j) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>