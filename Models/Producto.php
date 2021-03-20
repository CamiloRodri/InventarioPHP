<?php

    require_once 'Conexion.php';    

    class Producto {
        private $id;
        private $nombre;
        private $categoria_id;

        public function __construct () {
            $this->id = 0;
            $this->nombre = '';
            $this->categoria_id = 1;
        }

        public static function listar () {
            $conexion = new Conexion ();
            $listado = $conexion->consultar('SELECT * FROM productos');
            $conexion->cerrar();
            return $listado;
        }
}
