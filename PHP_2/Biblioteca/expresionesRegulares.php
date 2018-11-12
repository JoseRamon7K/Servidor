<?php

function codigoPostal($cadena) {
    $cadena=trim(preg_replace('/[ ]+/', '',$cadena));
    return preg_match('/^[0-9]{5}$/', $cadena);
}
function telefono($cadena) {
    $cadena=trim(preg_replace('/[ \.\-_]+/', '',$cadena));
    return preg_match('/^[0-9]{9}$/', $cadena);
}
function calleAvenidaPaseo($cadena) {
    $cadena=trim($cadena);
    return preg_match('/(calle|avenida|paseo)/i', $cadena);
}
/*
• Debe empezar con una letra minúscula ó mayúscula.
• Debe contener solo letras, números y guión bajo.
• Debe contener entre 8 y 24 caracteres.
• No debe finalizar en guión bajo.
 */
function usuario($cadena) {
    $cadena=trim(preg_replace('/[ ]+/', '',$cadena));
    return preg_match('/^[a-zñÑ][a-zñÑ0-9_]{6,22}[^_]$/i', $cadena);
}

/*
• El nombre de usuario tiene que comenzar por una letra y puede contener 
letras, números y símbolos como . y _. Como mínimo tendrá 3 caracteres 
antes de la  @

• El nombre de usuario estará seguido de @

• El nombre del dominio puede estar compuesto por letras y al menos un 
punto seguido por al menos dos letras. En ningún caso permitirá tildes 
ni la letra ñ.

• La función devolverá verdadero o falso.
 */
function email($cadena) {    
    $cadena=trim($cadena);
    return preg_match('/^[a-zñÑ][a-zñÑ0-9\._]{2,}@[a-z]+\.[a-z]{2,}$/i', $cadena);
}

function otro($regular,$cadena) {
    return preg_match($regular, $cadena);
}

?>