<?php
$frase="El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
$frases=explode(" ",trim($frase));

foreach ($frases as $palabra) {
    echo $palabra."<br>";
}
?>