<?php

function esta_vacio($nombre, $ancho, $alto) {
    if (isset($nombre, $ancho, $alto) && $nombre != "" && $ancho != "" && $alto != "") {
        return true;
    } else {
        return false;
    }
}

$almacen = array();

if (esta_vacio($nombre = $_GET['nombre'], $ancho = $_GET['ancho'], $alto = $_GET['alto'])) { // Comprueba si están vacios y != null
    if (is_numeric($ancho) && is_numeric($alto)) {

        var_dump($ancho);
        var_dump($alto);
        echo "zoi felí";
    } else {
        echo "Los campos ancho y alto deben ser numéricos.";

    }
} else {
    echo "Todos los campos deben contener algún dato.";
}

?>

</br>
</br>

<a href="index.php">Volver</a>
