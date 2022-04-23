<?php
    echo "<table style=\"text-align:center\">";
    for ($i = 0; $i < 101; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 101; $j++) {
            if ($i == 0 && $j == 0) {
                echo "<th></th>";
            }
            elseif ($i == 0) {
                echo "<th>" . $j . "</th>";
            }
            elseif ($j == 0) {
                echo "<th>" . $i . "</th>";
            }
            else {
                echo "<td>" . ($i * $j) . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>