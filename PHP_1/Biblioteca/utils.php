<?php
function sinTildes($cadena) {
    
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
    $cadena=preg_replace($keys,$values,$cadena);
    return $cadena;
}

function sinEspacios($cadena) {
    return trim(preg_replace('/ +/', ' ', $cadena));
}

function compCaseEsp($cadena1,$cadena2) {
    $cadena1=sinEspacios($cadena1);
    $cadena2=sinEspacios($cadena2);
    
    $cadena1=mb_strtolower($cadena1);
    $cadena2=mb_strtolower($cadena2);
    
    $cadena1=sinTildes($cadena1);
    $cadena2=sinTildes($cadena2);
    $result=strcasecmp($cadena1, $cadena2);
    
    
    if ($result===0) {
        $r="Son iguales";
    }else{
        $r="Son distintos";
    }
    return $r;
}