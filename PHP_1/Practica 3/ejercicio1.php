<?php
$colores=array(
    "Colores Fuertes"=>array(
        "Rojo"=>"FF0000",
        "Verder"=>"00FF00",
        "Azul"=>"0000FF"),
    "Colores Suaves"=>array(
        "Rosa"=>"FE9ABC",
        "Amarillo"=>"FDF189",
        "Malva"=>"BC8F8F"));
echo '<table border="1">';
foreach ($colores as $color=>$c) {
    echo '<tr>'; 
    echo '<td>'.$color.'</td>';
    foreach ($c as $col=>$value) {
        echo '<td style="background-color:'.$value.'">'.$col.':'.$value.'</td>';
    }
}
echo "<table>";

foreach ($colores as $color=>$c) {   
        if (in_array("FF88CC"||"FF0000", $c)) {
            echo "Esta <br>";
            break;
        }else{
            echo "No esta <br>";
            break;
        }
}

?>