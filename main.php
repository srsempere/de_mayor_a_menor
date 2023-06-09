<?php

session_start();
if (!isset($_SESSION['almacen'])) {
    $_SESSION['almacen'] = array();
}


function esta_vacio($nombre, $ancho, $alto)
{
    if (isset($nombre, $ancho, $alto) && $nombre != "" && $ancho != "" && $alto != "") {
        return true;
    } else {
        return false;
    }
}

function cmp($a, $b) {
    $tamañoA = $a['ancho'] * $a['alto'];
    $tamañoB = $b['ancho'] * $b['alto'];
    if ($tamañoA == $tamañoB) {
        return 0;
    }
    return ($tamañoA < $tamañoB) ? -1 : 1;
}


if (esta_vacio($_GET['nombre'], $_GET['ancho'], $_GET['alto'])) { // Comprueba si están vacios y != null
    $nombre = $_GET['nombre'];
    $ancho = (float) $_GET['ancho'];
    $alto = (float) $_GET['alto'];
    if (is_numeric($ancho) && is_numeric($alto)) {
        // Comprobar si la clave existe ya en el array.
        if (array_key_exists($nombre, $_SESSION['almacen'])) {
            echo "El producto ingresado ya existe";
        } else {
            $_SESSION['almacen'][$nombre] = array('ancho' => $ancho, 'alto' => $alto);
            uasort($_SESSION['almacen'], 'cmp');
            echo "Artículo agregado con éxito." . "\n";
        }
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
