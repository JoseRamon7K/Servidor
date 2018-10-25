<?php

$cadena="ApRendEr proGraMarciÓn";

$cadena=mb_strtolower($cadena);

$len=mb_strlen($cadena);
if ($len%2==0) {
    $len/=2;
}else{
    $len++;
    $len/=2;
}


for ($i = 0; $i < $len; $i++) {
    $cadena="*".$cadena."*";
}

echo $cadena;

?>