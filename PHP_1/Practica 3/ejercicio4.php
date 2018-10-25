<?php
$eindice=array(
    array(
        array(
            "Frank",
            "Pepe",
            "Luis",
            "Raul"
        ),
        array(
            "Tiger",
            "Mourin",
            "Katz",
            "Alberto"
        ),
    ),
    array(
        array(
            "Suarez",
            "Koltz",
            "Fernandez",
            "Ramirez"
        )
    ),
    array(
        array(
            "Higuita",
            "Mel",
            "Rubens",
            "Messi"
        ),
        array(
            "Kostenmeiner",
            "Lenkins",
            "Marash",
            "Juanes"
        )
    )
);

echo print_r($eindice)."<br><br>";

$equipos=array(
    "Español"=>array(
        "Equipo 1"=>array(
            "Portero"=>"Frank",
            "Defensa"=>"Pepe",
            "Medio"=>"Luis",
            "Delantero"=>"Raul"
        ),
        "Equipo 2"=>array(
            "Portero"=>"Tiger",
            "Defensa"=>"Mourin",
            "Medio"=>"Katz",
            "Delantero"=>"Alberto"
        )
    ),
    "Mexicano"=>array(
        "Equipo 1"=>array(
            "Portero"=>"Suarez",
            "Defensa"=>"Koltz",
            "Medio"=>"Fernandez",
            "Delantero"=>"Ramirez"
        )
    ),
    "Argentino"=>array(
        "Equipo 1"=>array(
            "Portero"=>"Higuita",
            "Defensa"=>"Mel",
            "Medio"=>"Rubens",
            "Delantero"=>"Messi"
        ),
        "Equipo 2"=>array(
            "Portero"=>"Kostenmeiner",
            "Defensa"=>"Lenkins",
            "Medio"=>"Marash",
            "Delantero"=>"Juanes"
        )
    )
);

echo print_r($equipos)."<br><br>";
//echo count($equipos);
foreach ($equipos as $nacionalidad => $datos) {
    echo '<table border="1">';
    echo '<tr><td colspan="3" bgcolor="#25f54v">Nacionalidad '.$nacionalidad.'</td></tr>';
    foreach ($datos as $equipo => $value) {        
        echo '<tr><td colspan="3" bgcolor="#ff546f">'.$equipo.'</td></tr>';
        foreach ($value as $posicion => $nombre){
            echo '<tr><td>'.$posicion.'</td>';
            echo '<td>'.$nombre.'</td></tr>';
        }
    }
    echo '</table><br>';
}


?>