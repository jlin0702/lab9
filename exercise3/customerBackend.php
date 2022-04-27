<link href="styles.css" 
        rel="stylesheet" 
        type="text/css"/> 
<?php
    //gets the values
    $username = $_POST["username"];
    $password = $_POST["password"];
    $tshirt_amount = $_POST["tshirt"];
    $sweater_amount = $_POST["sweater"];
    $jacket_amount = $_POST["jacket"];
    $shipping = $_POST["shipping"];

    //info for each item
    $items = array("T-Shirt", "Sweater", "Jacket");
    $amounts = array($tshirt_amount, $sweater_amount, $jacket_amount);
    $prices = array(10, 20, 30);

    $total = 0;

    //welcome message
    echo "<p>Welcome " . $username . "</p>";
    echo "<p>Password: " . $password . "</p>";

    //start table
    echo "<table>";
    //make first row first
    echo "<tr>";
    echo "<th></th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Subtotal</th>";
    echo "</tr>";
    //data fields
    for ($i = 0; $i < 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 4; $j++) {
            if ($j == 0) {
                echo "<th>" . $items[$i] . "</th>";
            }
            elseif ($j == 1) {
                echo "<td>" . $amounts[$i] . "</td>";
            }
            elseif ($j == 2) {
                echo "<td>$" . $prices[$i] . "</td>";
            }
            else {
                echo "<td>$" . ($amounts[$i]*$prices[$i]) . "</td>";
                $total += $amounts[$i]*$prices[$i];
            }
        }
        echo "</tr>";
    }

    //shipping fields
    echo "<tr>";
    echo "<th>Shipping</th>";
    echo "<td colspan = '2'>" . $shipping . "</td>";
    if($shipping == "Free"){
        echo "<td>$0</td>";
    }else if($shipping == "Over night"){
        echo "<td>$50</td>";
        $total += 50;

    }else if($shipping == "Three day"){
        echo "<td>$5</td>";
        $total += 5;
    }
    echo "</tr>";

    //total fields
    echo "<tr>";
    echo "<th colspan = '3'>Total Cost</th>";
    echo "<th>$" . $total . "</th>";
    echo "</tr>";
    echo "</table>";
?>