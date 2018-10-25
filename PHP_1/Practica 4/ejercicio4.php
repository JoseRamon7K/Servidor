<?php

$frase="El abecedario completo es algo largo y detallarlo exhaustivamente es
costoso";
$frase=mb_strtolower($frase);
echo "A -> ".mb_substr_count($frase,"a")."<br>";
echo "E -> ".mb_substr_count($frase,"e")."<br>";
echo "I -> ".mb_substr_count($frase,"i")."<br>";
echo "O -> ".mb_substr_count($frase,"o")."<br>";
echo "U -> ".mb_substr_count($frase,"u")."<br>";
?>