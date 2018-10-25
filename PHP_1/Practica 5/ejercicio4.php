<?php

function compCaseEsp($cadena1,$cadena2) {
    $keys = array (
    // Espacios, puntos y comas por guion
        '/[., ]+/',
        
        // Vocales
        '/à/',
        '/è/',
        '/ì/',
        '/ò/' ,
        '/ù/' ,
        
        '/á/' ,
        '/é/' ,
        '/í/' ,
        '/ó/',
        '/ú/',
        
        '/â/',
        '/ê/' ,
        '/î/' ,
        '/ô/',
        '/û/' ,
        
        '/ã/',
        '/&etilde;/',
        '/&itilde;/',
        '/õ/' ,
        '/&utilde;/',
        
        '/ä/',
        '/ë/',
        '/ï/',
        '/ö/',
        '/ü/' ,
       
        '/ä/' ,
        '/ë/' ,
        '/ï/',
        '/ö/',
        '/ü/',
        
        // Otras letras y caracteres especiales
        '/å/',
        '/ñ/',
        
        // Agregar aqui mas caracteres si es necesario
        
        );
    $values = array (
        // Espacios, puntos y comas por guion
        '-',
        
        // Vocales
        'a',
        'e',
        'i',
        'o',
        'u',
        
        'a',
        'e',
        'i',
        'o',
        'u',
        
        'a',
        'e',
        'i',
        'o',
        'u',
        
        'a',
        'e',
        'i',
        'o',
        'u',
        
        'a',
        'e',
        'i',
        'o',
        'u',
        
        'a',
        'e',
        'i',
        'o',
        'u',
        
        // Otras letras y caracteres especiales
        'a',
        'n',
        
        // Agregar aqui mas caracteres si es necesario
        
    );
    $cadena1=trim(preg_replace('/ +/', ' ', $cadena1));
    $cadena2=trim(preg_replace('/ +/', ' ', $cadena2));
    
    $cadena1=mb_strtolower($cadena1);
    $cadena2=mb_strtolower($cadena2);
    
    $cadena1=preg_replace($keys,$values,$cadena1);
    $cadena2=preg_replace($keys,$values,$cadena2);
    $result=strcasecmp($cadena1, $cadena2);
      
    
    if ($result===0) {
        $r="Son iguales";
    }else{
        $r="Son distintos";
    }
    return $r;
}
$cadena1="Hola que tal é dbgkiufdhgo   fsaghasdf    ";
$cadena2="Hola qUe tÁl é dbgkIuFdhgo   fsaghasdf    ";

echo $cadena1.'<br>';
echo $cadena2.'<br>';
echo compCaseEsp($cadena1, $cadena2)


?>