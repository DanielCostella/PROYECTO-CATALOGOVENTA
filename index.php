<?php
/*@autor DANIEL COSTELLA*/

require_once 'class/autoload.php';

$database = new Database();
$conn = $database->getConnection();

// Consulta para obtener productos y sus categorías
$query = "
    SELECT p.id, p.nombre AS producto_nombre, p.descripcion, p.imagen, c.nombre AS categoria_nombre
    FROM productos p
    JOIN categorias c ON p.categoria_id = c.id
";
$stmt = $conn->prepare($query);
$stmt->execute();

$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tienda - Productos</title>
    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
    <header>
        <img src="assets/imagenes/logo.png" alt="Logo de la Empresa"> 
        <h1>Bienvenidos a Nuestra Tienda</h1>
    </header>
    <main>
        <div class="productos">
            <?php foreach ($productos as $producto): ?>
                <div class="producto">
                    <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['producto_nombre']; ?>">
                    <h2><?php echo $producto['producto_nombre']; ?></h2>
                    <p>Categoría: <?php echo $producto['categoria_nombre']; ?></p>
                    <p><?php echo $producto['descripcion']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
</html>