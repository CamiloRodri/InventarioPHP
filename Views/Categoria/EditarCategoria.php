<?php
	require_once '../../Models/Categoria.php';
	$categoria = Categoria::obtenerPorId(base64_decode($_GET['id']));
?>

<?php include("../Includes/header.php") ?>

<div class="content">

    <form action="../../Controllers/CategoriaController.php" method="POST">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre Categoria" value="<?= $categoria[1] ?>" required>
        </div>
        <input type="submit" class="btn btn-success" name="a" value="Editar">
    </form>

    <br><br><br><br><br><br>

</div>

<?php include("../Includes/footer.php") ?>