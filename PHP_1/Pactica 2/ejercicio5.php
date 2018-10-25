<?php

$lenguajes=array(
    "Lenguajes Servidor"=>array("PHP"),
    "Lenguajes Cliente"=>array("Java Script"),
);

foreach ($lenguajes as $tipo => $datos) {
    echo '<strong>'.$tipo.'</strong>:<br>';
    foreach ($datos as $lenguaje) {
        echo '-'.$lenguaje.'<br>';
    };
}

?>