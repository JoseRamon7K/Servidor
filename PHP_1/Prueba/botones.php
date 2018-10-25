<?php
$array=array();

foreach ($_REQUEST as $key => $value) {
    if (empty($_REQUEST[$key])) {
        echo "Vacio";
    }else{
        $array[]=$_REQUEST[$key];
    }
}

print_r($array);

/*
 $array=array();
 
 if (empty($_REQUEST['nombre'])) {
 echo "Vacio";
 }else{
 if ($_REQUEST['nombre']=='*') {
 echo '<br>'.tabla($array);
 }else{
 $array[]=$_REQUEST['nombre'];
 }
 }*/

?>