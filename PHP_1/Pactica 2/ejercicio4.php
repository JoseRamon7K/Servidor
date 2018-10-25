<?php

$jugadores=array("Crovic","Antic","Malic","Zulic","Rostrich");

echo "La alineación del equipo está compuesta por ";

for ($i = 0; $i < count($jugadores); $i++) {
    echo $jugadores[$i];
    if ($i<count($jugadores)-1){
        echo ", ";
    }else{
        echo ".";
    }
}

?>