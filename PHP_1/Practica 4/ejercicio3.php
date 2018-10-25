<?php

$frase1="La bala mata la vaca";
$frase2="El oso osó asir a la osa";
echo $frase1." -> ".mb_substr_count($frase1,"a")."<br>";
echo $frase2." -> ".mb_substr_count($frase2,"a");

?>