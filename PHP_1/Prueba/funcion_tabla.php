<?php 

function tabla(array $aray,$titulo="Tabla",$color_bk="#CCFFFF",$color_tx="#000000",$tama_tx="12",$pading="10") {
    $declaracion='<table bgcolor='.$color_bk.' border="2"><caption>'.$titulo.'</caption>';
    
    foreach ($aray as $key => $value) {
        $declaracion=$declaracion.'<tr>';
        if (is_array($value)==true) {
            foreach ($value as $key1 => $value1) {
                if (is_array($value1)) {
                    $declaracion="Array demasiado grande";
                }else{
                    $declaracion=$declaracion.'<td style="color:'.$color_tx.';
                        font-size: '.$tama_tx.'px;
                        padding: '.$pading.'px;">'.$value1.'</td>';
                }                
            }
            $declaracion=$declaracion.'</tr>';
        }else{            
            $declaracion=$declaracion.'<td style="color:'.$color_tx.';
                font-size: '.$tama_tx.'px;
                padding: '.$pading.'px;">'.$value.'</td>';
        }
        
    }
    $declaracion=$declaracion.'</table>';
    return $declaracion;
}

$array=array(
    array(1,2,3,4),
    array(5,6),
    array(7,8,9,10),
    array(11,12,13,14,15,16),
    array(17,18,19),
    array(20)
);


echo tabla($array,"Numeros");

?>