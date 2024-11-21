?php
// test_connection.php
define('B_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'miproyecto');
define('DB_PORT', 3306);

try {
    $conn = new PDO("mysql:host=" . B_HOST . ";dbname=" . DB_NAME . ";port=" . DB_PORT, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch(PDOException $exception) {
    echo "Error de conexión: " . $exception->getMessage();
}
?>