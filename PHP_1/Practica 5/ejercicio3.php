<?php

function sinEspacios($cadena) {        
    return trim(preg_replace('/ +/', ' ', $cadena));
}

$cadena="      fahushgosh wra   ajfrgoah oad  hjgoih     ";
echo sinEspacios($cadena);
?>