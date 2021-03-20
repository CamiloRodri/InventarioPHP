<?php include("../Includes/header.php") ?>
<?php require_once "../../Models/Categoria.php" ?>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="text-align:right"> 
                        <a type="button" class="btn btn-success" href="InsertarCategoria.php">Nueva Categoria</a> 
                    </div>            
                    <h4 class="card-title"> Lista de Categorias</h4>    
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
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach(Categoria::listar() as $fila) {?>
                                    <tr>
                                
                                        <td>
                                            <?php echo $fila[0] ?>
                                        </td>
                                        <td>
                                        <?= $fila[1] ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="EditarCategoria.php?id=<?=base64_encode($fila[0])?>">
                                                        <i class="fas fa-marker"></i>
                                                </a>
                                                <a class="btn btn-danger" href="../../Controllers/CategoriaController.php?a=Eliminar&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
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



<!-- <div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Lista de Categorias</h4>
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
                                    Acciones
                                </th>
                            </thead>
                            <tbody>
                                <?php foreach($categoriaController->Index() as $fila) {?>
                                    <tr>
                                        <td>
                                            <?php echo $fila[0] ?>
                                        </td>
                                        <td>
                                            <?php echo $fila[1]; ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary" href="">
                                                    <i class="fas fa-marker"></i>
                                            </a>
                                            <a href="../../Controllers/CategoriaController.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
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
</div> -->



<?php include("../Includes/footer.php") ?>