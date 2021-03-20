<?php include("../Includes/header.php") ?>
<?php require_once "../../Models/Producto.php" ?>
<?php require_once "../../Models/Categoria.php" ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Lista de Productos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>
                                    Id
                                </th>
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Categoria
                                </th>
                                <th>
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach(Producto::listar() as $fila) {?>
                                    <tr>
                                        <td>
                                            <?php echo $fila[0] ?>
                                        </td>
                                        <td>
                                            <?= $fila[1] ?>
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<?php include("../Includes/footer.php") ?>