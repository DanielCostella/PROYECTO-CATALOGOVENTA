<?php
/*@autor DANIEL COSTELLA*/

class Productos {
    private $id;
    private $nombre;
    private $precio;
    private $categoria_id;

    public function __construct($nombre, $precio, $categoria_id) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria_id = $categoria_id;
    }

    public function guardar() {
        // ... implementación de guardar ...
    }

    public function eliminar() {
        // ... implementación de eliminar ...
    }
}