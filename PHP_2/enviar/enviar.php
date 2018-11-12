<?php
    $destino="44803182x#gmail.com";
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $telefono=$_POST['telefono'];
    $mensaje=$_POST['mensaje'];
    $contenido='Nombre: '.$nombre.'\nEmail: '.$email.'\nTelefono: '.$telefono.'\nMensaje: '.$mensaje;
    mail($destino,'Contacto',$contenido);
    header('location:Index2.html');
?>