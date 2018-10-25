<?php
$direccion="44803182x@gmail.com";
$error=false;
$antes_punto="";
$despues_punto=";";
$despues_arroba="";
$antes_arroba="";
$aux=0;
if (mb_strpos($direccion,"@") && mb_strpos($direccion,".")) {
    $antes_arroba=mb_substr($direccion, 0,mb_strpos($direccion,"@"));
    //echo $antes_arroba.'<br>';
    $despues_arroba=mb_substr($direccion, mb_strpos($direccion,"@")+1,mb_strlen($direccion));
    for ($i = 0; $i < mb_strlen($despues_arroba); $i++) {
        if($despues_arroba[$i]=='.'){
            $antes_punto=mb_substr($despues_arroba, 0,$i);
            //echo $antes_punto.'<br>';
            $aux=$i;
            $error=false;
        }
    } 
    $despues_punto=mb_substr($despues_arroba, $aux+1,mb_strlen($despues_arroba));
    //echo $despues_punto.'<br>';
    if (mb_strlen($antes_arroba)>=2){
        
        if(mb_strlen($antes_punto)>=2){      
            if(mb_strlen($despues_punto)>=2) {
                echo $direccion;
            }else{
                $error=true;
            }
        }else{
            $error=true;
        }
    }else{
        $error=true;
    }
}else{
    $error=true;
}

if ($error==true) {
    echo "ERROR";
}

echo "<br>";
echo "<br>";

$correo="luisobz44@gmail.com";
if (mb_strpos($correo,"@")!==false) {
    $trozoArroba=explode("@",$correo);
    if (count($trozoArroba)==2) {
        if (mb_strpos($trozoArroba,".")!==false) {
            $trozoPunto=explode(".",$trozoArroba[1]);
            if (count($trozoPunto)==2) {
                echo "Nombre de Email es <b>$trozoArroba[0]</b><br>";
                echo "El dominio es <b>$trozoPunto[0]</b>";
            }else{
                echo "Incluye más de un caracter '.' despues de la arroba";
            }
            
        }else{
            echo "No incluye el caracter '.' despues de la arroba";
        }
    }else{
        echo "Incluye más de un caracter '@'";
    }    
}else{
    echo "No incluye el caracter '@'";
}



?>