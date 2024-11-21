<?php
/*@autor DANIEL COSTELLA*/

require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $categoria_id = $_POST['categoria_id'];

    $producto = new Productos($nombre, $precio, $categoria_id);
    $producto->guardar();
    // Redirigir o mostrar mensaje de éxito
}
?>
