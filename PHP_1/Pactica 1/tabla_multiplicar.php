<?php
for ($i = 1; $i < 10; $i++) {
    echo "<strong>Tabla del $i </strong><br>";
    for ($x =0; $x <= 10; $x++) {
        echo "$i x $x = ".($i*$x)."<br>";
    }
    echo "<br>";
}

for ($i = 1; $i < 10; $i++) {
    echo '<table bgcolor="#cccccc" border="5">';
    echo '<tr>';
    echo '<td align="center">';
    echo "<strong>Tabla del $i </strong>";
    echo '</td></tr>';
    for ($x =0; $x <= 10; $x++) {
        echo '<tr><td>';
        echo "$i x $x = ".($i*$x)."";
        echo '</td></tr>';
        if ($x==10) {
            echo '</table>';
            echo "<br>";
        }
    }
    
}
?>