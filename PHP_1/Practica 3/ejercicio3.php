<?php

$animales=array(
    array(
        "Nombre"=>"foca",
        "Nombre Cientifico"=>"Phocidae"
    ),
    array("Nombre"=>"zorro",
        "Nombre Cientifico"=>"Vulpes vulpes"
    ),
    array("Nombre"=>"perro",
        "Nombre Cientifico"=>"Canis lupus familiaris"
    ),
    array("Nombre"=>"rata",
        "Nombre Cientifico"=>"Rattus"
    ),
    array("Nombre"=>"conejo",
        "Nombre Cientifico"=>"Oryctolagus cuniculus"
    ),
    array("Nombre"=>"puercoespin",
        "Nombre Cientifico"=>"Hystrix cristata"
    ),
    
);

$n=rand(0,5);

echo "<img src='img/".$animales[$n]["Nombre"].".jpg' width='400' height='300'><br>";
echo 'Nombre: '.$animales[$n]["Nombre"].'<br>';
echo 'Nombre Cientifico: '.$animales[$n]["Nombre Cientifico"].'<br>';

?>