<?php

function capitales($pais,$capi="Madrid",$habitantes="Muchos") {
    echo "La capital de ".$pais." es ".$capi." y tiene ".$habitantes." habitantes.<br>";
    
}


capitales("España");
capitales("Portugal","Lisboa");
capitales("Francia","Paris","6.000.000");
?>