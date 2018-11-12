<?php

function cabecera($titulo) //el archivo actual
{
?>
<!DOCTYPE html>
		<html lang="es">
			<head>
				<title>
				<?php
				echo $titulo;
				?>
			
			</title>
				<meta charset="utf-8"/>
			</head>
		<body>
<?php		
}

function pie(){
	echo "</body>
	</html>";
}

function sinTildes($frase) {

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
	$texto = str_replace($no_permitidas, $permitidas ,$frase);
	return $texto;
}

function sinEspacios($frase) {
	$texto = trim(preg_replace('/ +/', ' ', $frase));
	return $texto;
}

function recoge($var)
{
	if (isset($_REQUEST[$var]))
		$tmp=strip_tags(sinEspacios($_REQUEST[$var]));
	else 
		$tmp= "";
	
	return $tmp;
}


function cTexto ($text)
{
	if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
		return 1;
	else 
		return 0;
}


function cNum ($num)
{
	if (preg_match("/^[0-9]+$/", $num))
		return 1;
	else
		return 0;
}

function cEmail ($text)
{
    $cadena=trim($text);
    return preg_match('/^[a-zñÑ][a-zñÑ0-9\._]{2,}@[a-z]+\.[a-z]{2,}$/i', $cadena);
}

function cPassword ($text)
{
    $cadena=trim($text);
    return preg_match('/^[a-zñÑ0-9]{4}$/i', $cadena);
}
function subida($control='imagen',$dir = "archivos/",$extensionesValidas = array("jpg","png","gif"),$max_file_size = "51200"){
    /*// Carpeta para ubicación definitiva. Ruta relativa al fichero actual.
     // Tiene que estar creada esta carpeta, sino da error
     $dir = "archivos/";
     // Tamaño máxmo aceptado, si queremos que sea inferior al configurado en php.ini
     $max_file_size = "51200";
     // Creamos una lista de extensiones válidas, por seguridad es lo más válido.
     $extensionesValidas = array(
     "jpg",
     "png",
     "gif"
     );
     
     echo "<pre>";
     print_r($_REQUEST);
     print_r($_FILES);
     echo "</pre>";
     */
    /*
     * Comprobamos si hay un error al subirlo. Si ha habido algún error al subir no será necesario
     * comprobar nada más
     */
    
    if ($_FILES[$control]['error'] != 0) {
        echo 'Error: ';
        switch ($_FILES[$control]['error']) {
            case 1:
                $errores[] =  "UPLOAD_ERR_INI_SIZE <br>Fichero demasiado grande<br>";
                break;
            case 2:
                $errores[] =  "UPLOAD_ERR_FORM_SIZE<br>El fichero es demasiado grande<br>";
                break;
            case 3:
                $errores[] =  "UPLOAD_ERR_PARTIAL<br>El fichero no se ha podido subir entero<br>";
                break;
            case 4:
                $errores[] =  "UPLOAD_ERR_NO_FILE<br>No se ha podido subir el fichero<br>";
                break;
            case 6:
                $errores[] =  "UPLOAD_ERR_NO_TMP_DIR<br>Falta carpeta temporal<br>";
            case 7:
                $errores[] = "UPLOAD_ERR_CANT_WRITE<br>No se ha podido escribir en el disco<br>";
                
            default:
                $errores[] = 'Error indeterminado.';
        }
    } else {
        // Guardamos el nombre original del fichero
        $nombreArchivo = $_FILES[$control]['name'];
        // Guardamos tamaño fichero
        $filesize = $_FILES[$control]['size'];
        // Guardamos nombre del fichero en el servidor
        $directorioTemp = $_FILES[$control]['tmp_name'];
        // Guardamos la información del archivo en un array
        $arrayArchivo = pathinfo($nombreArchivo);
        /*
         * Extraemos la extensión del fichero, desde el último punto. Si hubiese doble extensión, no lo
         * tendría en cuenta.
         */
        $extension = $arrayArchivo['extension'];
        // Comprobamos la extensión del archivo dentro de la lista que hemos definido al principio
        if (! in_array($extension, $extensionesValidas)) {
            $errores[] = "La extensión del archivo no es válida o no se ha subido ningún archivo";
        }
        // Comprobamos el tamaño del archivo
        if ($filesize > $max_file_size) {
            $errores[] = "La imagen debe de tener un tamaño inferior a 50 kb";
        }
        
        // Almacenamos el archivo en ubicación definitiva si no hay errores
        if (empty($errores)) {
            // Añadimo time() al nombre del fichero, así lo haremos único y si tuviera doble extensión
            // Haríamos inservible la segunda.
            $nombreArchivo = $arrayArchivo['filename'] . time();
            $nombreCompleto = $dir . $nombreArchivo . "." . $extension;
            // Movemos el fichero a la ubicación definitiva
            if (move_uploaded_file($directorioTemp, $nombreCompleto)) {
                //echo "<br> El fichero \"$nombreCompleto\" ha sido guardado";
                return $nombreCompleto;
            } else {
                $errores[] = "Error: No se puede mover el fichero a su destino";
            }
        }
    }
    return $errores;
}

?>
