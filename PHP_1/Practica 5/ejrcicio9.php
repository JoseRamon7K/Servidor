<?php

function potencia(int $base, int $exponente) {
    if ($exponente==0) { 
        return 1;
    } else  { 
        return $base * potencia ($base, $exponente-1); 
    }
}

echo potencia(2,3);
?>