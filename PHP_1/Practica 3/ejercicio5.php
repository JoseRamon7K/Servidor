<?php
for ($i = 0; $i <= 5; $i++) {
    $pila = array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
    switch ($i) {
        case 0:{
            echo print_r($pila);
            echo "<br>";
            break;
        }
        case 1:{
            asort($pila);
            echo print_r($pila);
            echo "<br>";
            break;
        }
        case 2:{
            arsort($pila);
            echo print_r($pila);
            echo "<br>";
            break;
        }
        case 3:{
            ksort($pila);
            echo print_r($pila);
            echo "<br>";
            break;
        }
        case 4:{
            sort($pila);
            echo print_r($pila);
            echo "<br>";
            break;
        }
        case 5:{
            rsort($pila);
            echo print_r($pila);
            echo "<br>";
            break;
        }
    }
}
?>