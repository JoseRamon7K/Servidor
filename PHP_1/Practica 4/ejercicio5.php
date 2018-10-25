<?php

$frase="El abecedario completo es algo largo y detallarlo exhaustivamente es
costoso";
echo $frase."<br>";
$frase=mb_strtolower($frase);

$frase=str_replace("a","*",$frase);

echo $frase."<br>";

?>