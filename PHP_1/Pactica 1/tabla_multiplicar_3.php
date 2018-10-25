<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 7</title>
</head>
<body>

<?php
$numero=rand(1,20);
echo '<table bgcolor="#cccccc" border="5">';
    echo '<tr>';
        echo '<td align="center" colspan="2">';
            echo "<strong>Tabla del $numero </strong>";
        echo '</td></tr>';
        for ($x =1; $x <= 10; $x++) {        
            echo '<tr><td>';
                echo "$numero x $x";        
            echo '</td>';
            echo'<td>'.($numero*$x).'</td></tr>';
            if ($x==10) {
                echo '</table>';
                echo "<br>";
            }
        }
    
?>
