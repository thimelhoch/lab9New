<?php
echo "<link rel='stylesheet' type='text/css' href='style.css' />";
  $usernameV = $_POST['username'];
  $passwordV= $_POST['password'];
  $notebookV = $_POST["notebook"];
  $earphonesV = $_POST['earphones'];
  $pencilV = $_POST['pencil'];
  $shipQuantity = $_POST['shipping'];
  $earphonesTotal= $earphonesV * 20;
  $pencilTotal = $pencilV * 2;
  $notebookTotal = $notebookV * 3;
  if($shipQuantity == "$5.00 three day"){
      $shipCost = 5;
    } else if($shipQuantity =="$50.00 over night")
    {
      $shipCost = 50;
    }
    else {
      $shipCost =0;
    }
echo "<br><p class='receipt'>Here is your receipt. Thank You Come Again!</p><br>User: " . $usernameV . "<br>Password: " . $passwordV . "<br><br>";
  echo "<table> \n";
    echo "<tr>\n";
      echo "<td></td>";
      echo "<td>Quantity</td>";
      echo "<td>Cost Per Item</td>";
      echo "<td>Sub Total</td>";
    echo "<tr>\n";
    echo "</tr>";
      echo "<td>Earphones</td>";
      echo "<td>" . $earphonesV . "</td>";
      echo "<td>$20.00</td>";
      echo "<td>$" . $earphonesTotal . "</td>";
    echo "</tr>";
    echo "<tr>\n";
      echo "<td>Pencil</td>";
      echo "<td>" . $pencilV . "</td>";
      echo "<td>$2.00</td>";
      echo "<td>$" . $pencilTotal . "</td>";
    echo "</tr>";
    echo "<tr>\n";
      echo "<td>Notebook</td>";
      echo "<td>" . $notebookV . "</td>";
      echo "<td>$3.00</td>";
      echo "<td>$" . $notebookTotal . "</td>";
    echo "</tr>";
    echo "<tr>\n";
      echo "<td>Shipping</td>";
      echo "<td>" . $shipQuantity . "</td>";

      echo "<td>$" . $shipCost . "</td>";
      echo "<td>$" . $shipCost . "</td>";
    echo "</tr>";
    echo "<tr>\n";
      echo "<td></td>";
      echo "<td></td>";
      echo "<td>Total Cost</td>";
      $finalCost = $earphonesTotal + $pencilTotal + $notebookTotal + $shipCost;
      echo "<td>$" . $finalCost . "</td>";
    echo "</tr>";
  echo "</table>";
?>
