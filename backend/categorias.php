<?php
/*@autor DANIEL COSTELLA*/

require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $categoria = new Categorias($nombre);
    $categoria->guardar();
    // Redirigir o mostrar mensaje de éxito
}
?>
<!-- Aquí puedes agregar el HTML para el formulario de categorías -->