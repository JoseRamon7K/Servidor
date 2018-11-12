<?php
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
$errores[] = array();
if (! isset($_REQUEST['bAceptar'])) {
    ?>

<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
	Nombre: <input TYPE="text" NAME="nombre"><br> Edad: <input TYPE="text"
		NAME="edad"><br> <input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>
</body>
</html>
<?php
}  // En esta parte comprobamos los datos recibidos
else {
    $nombre = recoge("nombre");
    $edad = recoge('edad');
    
    if ((cTexto($nombre) == 0)) {
        $errores['nombre'] = 'El nombre no es correcto';
        $error = true;
    }
    if ((cNum($edad) == 0)) {
        $errores['edad'] = 'La edad no es correcta';
        $error = true;
    }
    if (! $error) {
        echo 'Nombre: ', $nombre;
        echo '<br>';
        echo "Edad: ", $edad;
        //header("location:correcto.php?nombre=$nombre&edad=$edad");
    } else {
        
        ?>
<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>" METHOD='post'>
	Nombre: <input TYPE="text" NAME="nombre" VALUE="<?php echo $nombre;?>">
	<br>
		<?php
        
        echo '<br>';
        if (isset($errores['nombre']))
            echo "$errores[nombre] <br>";
        ?>
	    Edad: <input TYPE="text" NAME="edad" VALUE="<?php echo $edad; ?>"> 
	    <br>
		<?php
        if (isset($errores['edad']))
            echo $errores['edad'];
        echo '<br>';
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>
	