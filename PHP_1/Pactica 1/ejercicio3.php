<?php
$radio_tierra= 6371;
$distancia_sol=149600000000;
$Pi=3.1415926;

$circunferencia=2*$Pi*$radio_tierra;
$vueltas=$distancia_sol/$circunferencia;

echo "La tierra tiene una circunferencia de $circunferencia <br>";
echo "Y se deberia de dar $vueltas vueltas para equivaler a la distancia de la tierra al sol"


?>