<?php

function sinTildes($cadena) {
    $cadena=preg_replace('/á/','a',$cadena);
    $cadena=preg_replace('/é/','e',$cadena);
    $cadena=preg_replace('/í/','i',$cadena);
    $cadena=preg_replace('/ó/','o',$cadena);
    $cadena=preg_replace('/ú/','u',$cadena);
    return $cadena;
}

$cadena="á  afdhé asfg í fhóú";
echo $cadena."<br>";
echo sinTildes($cadena);

?>