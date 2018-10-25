<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejemplo 7</title>
</head>
<body>

<?php
echo '<table bgcolor="#cccccc" border="5">';
for ($i = 0; $i < 10; $i++) {
    
        echo '<tr>';
            
            for ($x =1; $x < 10; $x++) {    
                if ($i==0) {
                    echo '<td align="center">';
                    echo "<strong>Tabla del $x </strong>";
                    echo '</td>';
                }else{
                    if ($x==10) {
                        echo '</tr><tr>';
                    }                    
                    echo '<td>';
                    echo "$x x $i = ".($i*$x)."";        
                    echo '</td>';                                           
                }
            }
            echo '</tr>';
}
echo '</table>';
?>
