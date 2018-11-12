<?php
include ('../Biblioteca/bGeneral.php');
cabecera ($_SERVER ['PHP_SELF']); //el archivo actual
echo '<span style="color:blue";><strong>Enunciado: ', $_GET['enunciado'],'</strong></span>';
echo '<br>';
echo "Expresion Regular: ", $_GET['expresion'];
echo '<br>';
echo "Cadena: ", $_GET['cadena'];
echo '<br>';
echo "<strong>Solucion: ", $_GET ['solucion'],'</strong>';
pie();
?>