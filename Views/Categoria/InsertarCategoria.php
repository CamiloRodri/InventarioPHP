<?php include("../Includes/header.php") ?>

<div class="content">
    <form action="../../Controllers/CategoriaController.php" method="POST">
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre Categoria" autofocus>
        </div>
        <input type="submit" class="btn btn-success" name="a" value="Guardar">
    </form>

    <br><br><br><br><br><br>

</div>

<?php include("../Includes/footer.php") ?>