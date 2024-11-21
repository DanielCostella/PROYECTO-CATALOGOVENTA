<?php
/*@autor DANIEL COSTELLA*/

// Incluir el archivo de configuración
require_once 'config.php'; // Asegúrate de que el archivo config.php esté en la misma carpeta

class Database {
    private $host = B_HOST; // Usar la constante definida en config.php
    private $db_name = DB_NAME; // Usar la constante definida en config.php
    private $username = DB_USER; // Usar la constante definida en config.php
    private $password = DB_PASSWORD; // Usar la constante definida en config.php
    private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            // Crear la conexión usando las constantes
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name};port=" . DB_PORT, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function insert($query) {
        // ... implementación de insert ...
    }

    public function update($query) {
        // ... implementación de update ...
    }

    public function delete($query) {
        // ... implementación de delete ...
    }

    public function select($query) {
        // ... implementación de select ...
    }
}