<?php
include ('../Biblioteca/bGeneral.php');
include ('../Biblioteca/expresionesRegulares.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
if (! isset($_REQUEST['bEnviar'])) {
    ?>

<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>"METHOD="post">
	<strong>Expresiones Regulares</strong><br>
	Cadena: <input TYPE="text" NAME="cadena" size="30"><br>
	<input TYPE="radio" NAME="expresion" value="Codigo Postal" checked>Codigo Postal
	<input TYPE="radio" NAME="expresion" value="Telefono" >Telefono
	<input TYPE="radio" NAME="expresion" value="Calle, Avenida o Paseo" >Calle, Avenida o Paseo
	<input TYPE="radio" NAME="expresion" value="Usuario" >Usuario
	<input TYPE="radio" NAME="expresion" value="Email" >Email
	<input TYPE="radio" NAME="expresion" value="Otro">Otro
	<br> 
	Expresion Regular: <input TYPE="text" NAME="otro" value="//"><mark>Solo sera funcinal sí se selecciona el RadioButton "Otro".</mark><br>
	<input TYPE="submit" name="bEnviar" VALUE="Enviar">
</form>
</body>
</html>
<?php
}
else {
    $expresion=$_POST['expresion'];
    $cadena=$_POST['cadena'];
    $otro=$_POST['otro'];
    $enunciados=array('Compruebe si la cadena recibida corresponde con un código postal válido en España (sólo comprobar que son 5 números).',
        'Compruebe si la cadena recibida corresponde con un teléfono válido en España. Tener en cuenta que los usuarios al introducir el teléfono a veces introducen espacios o guiones no deseados.',
        'Compruebe si contiene las palabras calle, avenida o paseo antes de la dirección.',
        'Compruebe si es un nombre de usuario válido para nuestro sistema, temiendo en cuenta que:<br>*Debe empezar con una letra minúscula ó mayúscula.<br>*Debe contener solo letras, números y guión bajo.<br>*Debe contener entre 8 y 24 caracteres.<br>*No debe finalizar en guión bajo.',
        'Compruebe si la cadena recibida corresponde con un email válido. Tener en cuenta  que para nuestro servidor de correo:*El nombre de usuario tiene que comenzar por una letra y puede contener letras, números y símbolos como . y _. Como mínimo tendrá 3 caracteres antes de la  @.<br>*El nombre de usuario estará seguido de @.<br>*El nombre del dominio puede estar compuesto por letras y al menos un punto seguido por al menos dos letras. En ningún caso permitirá tildes ni la letra ñ..<br>*La función devolverá verdadero o falso.',
        'Comprube si la cadena recibida corresponde con la expresion regular'
    );
    switch ($expresion) {
        case 'Codigo Postal':{
            $enunciado=$enunciados[0];
            if(codigoPostal($cadena)){
                $error=false;
            }else{
                $error=true;
            }
            break;
        }
        case 'Telefono':{
            $enunciado=$enunciados[1];
            if(telefono($cadena)){
                $error=false;
            }else{
                $error=true;
            }
            break;
        }
        case 'Calle, Avenida o Paseo':{
            $enunciado=$enunciados[2];
            if(calleAvenidaPaseo($cadena)){
                $error=false;
            }else{
                $error=true;
            }
            break;
        }
        case 'Usuario':{
            $enunciado=$enunciados[3];
            if(usuario($cadena)){
                $error=false;
            }else{
                $error=true;
            }
            break;
        }
        case 'Email':{
            $enunciado=$enunciados[4];
            if(email($cadena)){
                $error=false;
            }else{
                $error=true;
            }
            break;
        }
        case 'Otro':{
            $enunciado=$enunciados[5];
            $expresion=$otro;
            if(otro($expresion,$cadena)){
                $error=false;
            }else{
                $error=true;
            }
            break;
        }
        default:{
            $error=true;
        }
    }
    if (! $error) {
        
        header("location:correcto.php?cadena=$cadena&solucion=Corrento&expresion=$expresion&enunciado=$enunciado");
    } else {
        header("location:correcto.php?cadena=$cadena&solucion=Incorrento&expresion=$expresion&enunciado=$enunciado");
    }
}
pie();
?>
