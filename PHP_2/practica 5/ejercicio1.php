<?php

/*$fecha=time();
 $fecha_con_formato = date("j/n/y -- H:i:s",$fecha);
 echo $fecha_con_formato;*/

$fecha_barra_cero='02/03/2015';
$fecha_barra_sincero='2/6/15';
$fecha_menos_cero='02-09-2015';
$fecha_menos_sincero='2-12-15';

estacion($fecha_barra_cero);
echo '<br>';
estacion($fecha_barra_sincero);
echo '<br>';
estacion($fecha_menos_cero);
echo '<br>';
estacion($fecha_menos_sincero);
echo '<br>';


/*1. Realiza una función que acepte una fecha como cadena con el formato dd-mm-aaaa
 * compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX.*/
function comprobarFechaDMA($dato){
    
    $fecha=arrayFecha($dato);
    //print_r($fecha);
    if(checkdate($fecha[1],$fecha[0],$fecha[2])){
        echo date("d-M-Y", mktime(0, 0, 0, $fecha[1], $fecha[0], $fecha[2]));
    }else {
        echo 'Mal';
    }
}


/*2. Realiza una función que acepte una fecha como cadena con el formato aaaa-mm-dd 
 * compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX.*/
function comprobarFechaAMD($dato){
    
    $fecha=arrayFecha($dato);
    //print_r($fecha);
    if(checkdate($fecha[1],$fecha[2],$fecha[0])){
        echo date("d-M-Y", mktime(0, 0, 0, $fecha[1], $fecha[2], $fecha[0]));
    }else {
        echo 'Mal';
    }
}

/*3. Realiza una función que reciba la fecha en formato UNIX y devuelva la fecha en 
 * formato dd-mm-aaaa y aaaa-mm-dd según un segundo argumento que le pasemos a la función.*/
function comprobarFecha($dato,$D_A='dd-mm-aaaa'){
    
    $fecha=arrayFecha($dato);
    //print_r($fecha);
    if(checkdate($fecha[1],$fecha[0],$fecha[2])){
        if ($D_A=='dd-mm-aaaa'){
            echo date("d-M-Y", mktime(0, 0, 0, $fecha[1],$fecha[0],$fecha[2]));
        }else if($D_A=='aaaa-mm-dd'){
            echo date("Y-M-d", mktime(0, 0, 0, $fecha[1],$fecha[0],$fecha[2]));
        }
    }else {
        echo 'Mal';
    }
    
    
}

/*4. Realiza una función que nos devuelva el nº de días que han pasado entre dos fechas. 
 * Hay que tener en cuenta que tendremos que validar las fechas antes o durante la función.*/
function diasDiferencia($dato,$datos2){
    
    $fecha1=arrayFecha($dato);
    //print_r($fecha);
    if(checkdate($fecha1[1],$fecha1[0],$fecha1[2])){
        
        
        $fecha2=arrayFecha($dato);
        //print_r($fecha);
        if(checkdate($fecha2[1],$fecha2[0],$fecha2[2])){
            
            //calculo timestam de las dos fechas
            $timestamp1 = mktime(0,0,0, $fecha1[1],$fecha1[0],$fecha1[2]);
            $timestamp2 = mktime(0,0,0, $fecha2[1],$fecha2[0],$fecha2[2]);
            
            //resto a una fecha la otra
            $segundos_diferencia = $timestamp1 - $timestamp2;
            //echo $segundos_diferencia;
            
            //convierto segundos en días
            $dias_diferencia = $segundos_diferencia / (60 * 60 * 24); 
            echo 'Se llevan '.$dias_diferencia.' dias de diferencia.';
        }else{            
            echo 'Mal';
        }
    }else {
        echo 'Mal';
    }
}
 
/*5. Realiza una función que muestre una imagen diferente según la estación del año. 
 * Para facilitarlo podemos tener en cuenta como primavera (marzo, abril, mayo) y así sucesivamente.*/

function estacion($dato){
    
    $fecha=arrayFecha($dato);
    //print_r($fecha);
    if(checkdate($fecha[1],$fecha[0],$fecha[2])){
        if ($fecha[1]==3||$fecha[1]==4||$fecha[1]==5){
            echo '<img src="img/primavera.jpg" width="200px" height="200px">';
        }else if ($fecha[1]==6||$fecha[1]==7||$fecha[1]==8){
            echo '<img src="img/verano.jpg" width="200px" height="200px">';
        }else if ($fecha[1]==9||$fecha[1]==10||$fecha[1]==11){
            echo '<img src="img/otoño.jpg" width="200px" height="200px">';
        }else if ($fecha[1]==12||$fecha[1]==1||$fecha[1]==2){
            echo '<img src="img/invierno.jpg" width="200px" height="200px">';
        }
    }else {
        echo 'Mal';
    }
}

function arrayFecha($dato){
    $fecha=preg_split("/[-\/]/",$dato);
    /*if (preg_match('/[-]+/', $dato)){
        $fecha=explode('-', $dato);
    }else if(preg_match('/[\/]+/', $dato)){
        $fecha=explode('/', $dato);
    }*/
    return $fecha;
}
?>