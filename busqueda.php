<?php include('db.php'); ?>

    <?php include('includes/header.php'); ?>

<main class="container p-4">
    <div class="row">

        <!-- Card text que tiene el menú principal y los filtros  -->
        <div class="col-md-4">
            
            <?php if(isset ($_SESSION['message'])) {?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?=$_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <!--mensaje de alerta con bootstrap-->
            <?php session_unset(); } ?>
                <!--cierra el mesaje de alerta al refrescar la página-->

            <div class="card card-body">
                <p class="title_form"> Menú principal </p>
                <form action="index.php" method="post">
                    <input type="submit" class="btn btn-primary btn block col-12 mx-auto boto" name='search' value="REGRESAR" style=" margin-top: 5px;">
                </form>
            </div>

            <div class="card card-body">
                <p class="title_form"> Filtrar por </p>
                    <form action="busqueda.php" method="post">
                    <input type="submit" class="btn btn-primary btn block col-12 mx-auto boto" name='positivo' value="POSITIVOS" style=" margin-top: 5px;">
                    <input type="submit" class="btn btn-primary btn block col-12 mx-auto boto" name='negativo' value="NEGATIVOS" style=" margin-top: 5px;">
                    <?php $idproducto=$_POST['idproducto']; ?>
                    <input type="hidden" name="idproducto" value="3">
                    </form>
            </div>
        </div>

        <!-- impresión de la tabla -->
        <div class="col-md-8">

            <table class="table table-border">
                <!-- Encabezado de la tabla -->
                <thead>
                    <tr>
                        <th>ID Producto</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Comentario</th>
                        <th >

                            <img src="img/Like.png" alt="Like" height="25px"> 

                            <img src="img/Dislike.png" alt="Dislike" height="25px"> 

                        </th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <!-- Registros de la tabla -->
                    <?php
                if(isset($_POST['search'])) {
                    $idproducto=$_POST['idproducto'];
                    $query = "SELECT *  FROM comentarios WHERE idProducto=$idproducto";
                    $result_usuario = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                        <!--recorro mi tabla usuario-->
                        <tr>
                            <td>
                                <?php echo $row['idProducto']; ?>
                            </td>
                            <td>
                                <?php echo $row['Correo']; ?>
                            </td>
                            <td>
                                <?php echo $row['Telefono']; ?>
                            </td>
                            <td>
                                <?php echo $row['Comentario']; ?>
                            </td>
                            <td>
                                <?php echo $row['Tipo']; ?>
                            </td>
                            <td>
                                <a href="edit.php?idcomentario=<?php echo $row['idComentario'] ?>">Editar</a>
                            </td>
                            <td>
                                <a href="delete.php?idcomentario=<?php echo $row['idComentario'] ?>">Eliminar</a>
                            </td>
                        </tr>
                        
                        <?php }} ?>

                        <?php
                if(isset($_POST['positivo'])) {
                    $idproducto=$_POST['idproducto'];
                    $query = "SELECT *  FROM comentarios WHERE idProducto=$idproducto and Tipo=0";
                    $result_usuario = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                        <!--recorro mi tabla usuario-->
                        <tr>
                            <td>
                                <?php echo $row['idProducto']; ?>
                            </td>
                            <td>
                                <?php echo $row['Correo']; ?>
                            </td>
                            <td>
                                <?php echo $row['Telefono']; ?>
                            </td>
                            <td>
                                <?php echo $row['Comentario']; ?>
                            </td>
                            <td>
                                <?php echo $row['Tipo']; ?>
                            </td>
                            <td>
                                <a href="edit.php?idcomentario=<?php echo $row['idComentario'] ?>">Editar</a>
                            </td>
                            <td>
                                <a href="delete.php?idcomentario=<?php echo $row['idComentario'] ?>">Eliminar</a>
                            </td>
                        </tr>
                        
                        <?php }} ?>

                        <?php
                if(isset($_POST['negativo'])) {
                    $idproducto=$_POST['idproducto'];
                    $query = "SELECT *  FROM comentarios WHERE idProducto=$idproducto and Tipo=1";
                    $result_usuario = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result_usuario)){ ?>
                        <!--recorro mi tabla usuario-->
                        <tr>
                            <td>
                                <?php echo $row['idProducto']; ?>
                            </td>
                            <td>
                                <?php echo $row['Correo']; ?>
                            </td>
                            <td>
                                <?php echo $row['Telefono']; ?>
                            </td>
                            <td>
                                <?php echo $row['Comentario']; ?>
                            </td>
                            <td>
                                <?php echo $row['Tipo']; ?>
                            </td>
                            <td>
                                <a href="edit.php?idcomentario=<?php echo $row['idComentario'] ?>">Editar</a>
                            </td>
                            <td>
                                <a href="delete.php?idcomentario=<?php echo $row['idComentario'] ?>">Eliminar</a>
                            </td>
                        </tr>
                        
                        <?php }} ?>
                </tbody>
                <!-- Fin de los registros de la tabla -->
            </table>
        </div>
    </div>
</main>

        <?php include('includes/footer.php'); ?>
