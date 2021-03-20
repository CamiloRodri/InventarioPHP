<?php

    require_once 'Conexion.php';        

    class Categoria {
        private $id;
        private $nombre;

        public function __construct () {
            $this->id = 0;
            $this->nombre = '';
        }

        public static function listar () {
            $conexion = new Conexion ();
            $listado = $conexion->consultar('SELECT * FROM categorias');
            $conexion->cerrar();
            return $listado;
        }
        
        public function eliminar () {
            $conexion = new Conexion ();
            $query = "DELETE FROM categorias WHERE id = $this->id";
            $resultado = $conexion->actualizar($query);
            $conexion->cerrar();
            return $resultado;
        }

        public function ingresar () {
            $conexion = new Conexion ();
            $query = "INSERT INTO categorias(nombre) VALUES ('$this->nombre')";
            $resultado = $conexion->actualizar($query);
            $conexion->cerrar();
            return $resultado;
        }
        
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            return $this->id = $id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            return $this->nombre = $nombre;
        }
    }



