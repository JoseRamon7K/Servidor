<?php

function cabecera($titulo="ejercicio7-8") {
    $header= '
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>'.$titulo.'</title>
        <style>
            
        </style>
    </head>
    <body>    
        <header>
        	<h1>'.$titulo.'</h1>
        </header> 
    ';
    return $header;
}

function pie() {
    $footer= '
        <footer>
        </footer>
    </body>
    </html>
    ';
    return $footer;
}

echo cabecera("Hola").pie();

?>

    
    