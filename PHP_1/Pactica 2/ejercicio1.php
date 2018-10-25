<?php

$dias=array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");

for ($i = 0; $i < count($dias); $i++) {
    echo "Dia $i = ".$dias[$i]."<br>";
}

foreach ($dias as $dia) {
    echo $dia."<br>";
}

?>