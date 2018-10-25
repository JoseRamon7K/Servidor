<?php
$numero=1;
echo '<table border="2">';
for ($i = 1; $i <= 10; $i++) { 
    echo '<tr>';
    for ($x = 1; $x <= 10; $x++) {
        if($i%2==0){
            echo '<td bgcolor="#ccccff">';
        }else{
            echo '<td bgcolor="#ffffff">';
        }        
        echo $numero;
        $numero++;
        echo '</td>';
    }    
    echo '</tr>';    
}
echo '</table>';

?>