<?php
$alumnos_indice=array(
    array(
        "Servidor"=>9,
        "Cliente"=>9,
        "Diseño"=>10,
    ),
    array(
        "Servidor"=>8,
        "Cliente"=>6,
        "Diseño"=>9,
    ),
    array(
        "Servidor"=>5,
        "Cliente"=>5,
        "Diseño"=>5,
    ),
    array(
        "Servidor"=>7,
        "Cliente"=>6,
        "Diseño"=>3,
    ),
    array(
        "Servidor"=>6,
        "Cliente"=>9,
        "Diseño"=>7,
    ),
    );
$alumnos_asociativo=array(
    "Jose Ramon Cabrera Roig"=>array(
        "Servidor"=>9,
        "Cliente"=>9,
        "Diseño"=>10,
    ),
    "Luis Marcos Dasi"=>array(
        "Servidor"=>8,
        "Cliente"=>6,
        "Diseño"=>9,
    ),
    "Juan Borreda"=>array(
        "Servidor"=>5,
        "Cliente"=>5,
        "Diseño"=>5,
    ),
    "Miguel Uhuena"=>array(
        "Servidor"=>7,
        "Cliente"=>6,
        "Diseño"=>3,
    ),
    "Marcos Botella"=>array(
        "Servidor"=>6,
        "Cliente"=>9,
        "Diseño"=>7,
    ),
);

//a.-
echo '<table border="1">';
foreach ($alumnos_indice as $indice=>$valor) {
    echo '<tr>'; 
    
    if ($indice==0) {
        echo '<td> </td>';
        foreach ($valor as $asignatura=>$notas) {
            echo '<td>'.$asignatura.'</td>';
        }
        echo '</tr><tr>';
    }
    echo '<td>'.$indice.'</td>';
    foreach ($valor as $asignatura=>$notas) {
        echo '<td>'.$notas.'</td>';
    }
    
    echo '</tr>';
}
echo '</table>';

//a.-
echo '<table border="1">';
$cont=0;
foreach ($alumnos_asociativo as $indice=>$valor) {
    echo '<tr>';
    
    if ($cont==0) {
        echo '<td> </td>';
        foreach ($valor as $asignatura=>$notas) {
            echo '<td>'.$asignatura.'</td>';
        }
        echo '</tr><tr>';
    }
    echo '<td>'.$indice.'</td>';
    foreach ($valor as $asignatura=>$notas) {
        echo '<td>'.$notas.'</td>';
    }
    
    echo '</tr>';
    
    $cont++;
}
echo '</table>';


//b.-
echo '<table border="1">';
foreach ($alumnos_indice as $indice=>$valor) {
    echo '<tr>';
    
    if ($indice==0) {
        echo '<td> </td>';
        foreach ($valor as $asignatura=>$notas) {
            echo '<td>'.$asignatura.'</td>';
        }
        echo '<td>Nota Media</td>';
        echo '</tr><tr>';
    }
    echo '<td>'.$indice.'</td>';
    $media=0;
    foreach ($valor as $asignatura=>$notas) {
        $media+=$notas;
        echo '<td>'.$notas.'</td>';
        
    }
    echo '<td>'.($media/count($valor)).'</td>';
    echo '</tr>';
}
echo '<tr><td></td>';
foreach ($alumnos_indice as $indice=>$valor) {
    $media=0;
    foreach ($valor as $asignatura=>$notas) {
        for ($i = 0; $i < count($alumnos_indice); $i++) {
            $media+=$alumnos_indice[$i][$asignatura];
        }
        echo '<td>'.($media/count($alumnos_indice)).'</td>'; 
       $media=0;
    }
    break;
    
}
echo '</tr>';
echo '</table>';
?>