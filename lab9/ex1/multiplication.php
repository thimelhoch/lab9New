<?php
echo "<table >";
for ($row = 0; $row <= 100; $row++) {
    echo "<tr> \n";
    for ($col = 0; $col <= 100; $col++) {
        if($row == 0 && $col == 0)
            echo '<td>  </td>';
        else if ($row == 0 && $col != 0)
            echo "<td>$col</td>";
        else if ($row != 0 && $col == 0)
            echo "<td>$row</td>";
        else {
            $mul = $col * $row;
            echo "<td>$mul</td> \n";
        }

    }
    echo "</tr>";
}
echo "</table>";
?>

