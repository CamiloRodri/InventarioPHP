<?php 
    require_once "../Models/Categoria.php";

    $accion = $_POST['a'] ?? $_GET['a'] ?? '';

    if ($accion != '') {
        $categoria = new Categoria();
    
        switch ($accion) {
            case 'listar': 
                return $categoria->listar();
                break;
            case 'Guardar':
                $categoria->setNombre($_POST['nombre']);
                $categoria->ingresar();
                break;
            case 'Editar':
                $categoria->setId(base64_decode($_POST['id']));
                $categoria->setNombre($_POST['nombre']);
                $categoria->editar();
                break;
            case 'Eliminar':
                $categoria->setId(base64_decode($_GET['id']));
                $categoria->eliminar();
                break;
        }
        header("Location: ../Views/Categoria/ListaCategoria.php");
    }
