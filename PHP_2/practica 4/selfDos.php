<?php
include ('../Biblioteca/bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
$errores[] = array();
if (! isset($_REQUEST['bAceptar'])) {
    ?>

<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>" METHOD="post" enctype="multipart/form-data">
	Nombre: <input TYPE="text" NAME="nombre"><br> 
	Edad: <input TYPE="text" NAME="edad"><br> 
	Email: <input TYPE="email" NAME="email"><br> 
	Password: <input TYPE="password" NAME="password"><br> 
	<input type="file" name="imagen" id="imagen" /><br> 
	<input TYPE="submit" name="bAceptar" VALUE="aceptar">
</form>
</body>
</html>
<?php
}  // En esta parte comprobamos los datos recibidos
else {
    $nombre = recoge("nombre");
    $edad = recoge('edad');
    $email = recoge("email");
    $password = recoge('password');
    
    
    if ((cTexto($nombre) == 0)) {
        $errores['nombre'] = 'El nombre no es correcto';
        $error = true;
    }
    if ((cNum($edad) == 0)) {
        $errores['edad'] = 'La edad no es correcta';
        $error = true;
    }
    if ((cEmail($email) == 0)) {
        $errores['email'] = 'El email no es correcto';
        $error = true;
    }
    if ((cPassword($password) == 0)) {
        $errores['password'] = 'La password no es correcto';
        $error = true;
    }
    $file=subida('imagen');
    if(is_array($file)){
        $errores['imagen'] = $file;
        $error = true;
    }
    
    if (! $error) {
            echo 'Nombre: ', $_POST['nombre'];
            echo '<br>';
            echo "Edad: ", $_POST['edad'];
            echo '<br>';
            echo "Email: ", $_POST['email'];
            echo '<br>';
            echo "Password: ", $_POST['password'];
            echo '<br>';
            echo "Fichero: ", $file;
            echo '<br>';
            echo '<img src='.$file.'>';
            echo '<br>';
    } else {
        
        ?>
<form ACTION="<?php $_SERVER ['PHP_SELF'] //el archivo actual?>" METHOD='post' enctype="multipart/form-data">
	Nombre: <input TYPE="text" NAME="nombre" VALUE="<?php echo $nombre;?>"><br>
		<?php
        if (isset($errores['nombre']))
            echo "<mark>$errores[nombre] <br>";
        ?>
    Edad: <input TYPE="text" NAME="edad" VALUE="<?php echo $edad; ?>"> <br>
		<?php
        if (isset($errores['edad']))
            echo '<mark>'.$errores['edad'].'</mark><br>';
        ?>
    Email: <input TYPE="email" NAME="email" VALUE="<?php echo $email;?>"><br>
		<?php
        if (isset($errores['email']))
            echo "<mark>$errores[email] <br>";
        ?>
    Password: <input TYPE="password" NAME="password" VALUE="<?php echo $password; ?>"> <br>
		<?php
        if (isset($errores['password']))
            echo '<mark>'.$errores['password'].'</mark>';
        echo '<br>';
        echo '<input type="file" name="imagen" id="imagen" /><br>';
        if (isset($errores['imagen']))
            echo '<mark>'.$errores['imagen'][0].'</mark>';
            echo '<br>';
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();

?>
	