<?php

$paises=array(
    "Malta"=>"La Valeta",
    "Alemania"=>"Berlín",
    "España"=>"Madrid",
    "Letonia"=>"Riga",
    "Austria"=>"Viena"
);

echo 'Sin ordenado.-<br>';

foreach ($paises as $pais => $capital) {
    echo 'La capital de '.$pais.' es '.$capital.'<br>';
}

echo '<br>Ordenado por pais.-<br>';

ksort($paises);
foreach ($paises as $pais => $capital) {
    echo 'La capital de '.$pais.' es '.$capital.'<br>';
}

echo '<br>Ordenado por capital.-<br>';

asort($paises);
foreach ($paises as $pais => $capital) {
    echo 'La capital de '.$pais.' es '.$capital.'<br>';
}


?>