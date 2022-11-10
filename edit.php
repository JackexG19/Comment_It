<?php
include("db.php");

$nombre = '';
$direccion= '';
$telefono = '';
$mail= '';
$comentario = '';

//Agregar el autollenado de datos ya existentes

if  (isset($_GET['idcomentario'])) {
  $idcomentario = $_GET['idcomentario'];
  $query = "SELECT * FROM comentarios WHERE idComentario=$idcomentario";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $idproducto = $row['idProducto'];
    $correo = $row['Correo'];
    $telefono = $row['Telefono'];
    $comentario = $row['Comentario'];
  }
}
if (isset($_POST['update'])) {
  $idproducto = $_GET['idproducto'];
  $correo= $_POST['correo'];
  $telefono= $_POST['telefono'];
  $comentario = $_POST['comentario'];
  $query = "UPDATE comentarios set correo = '$correo', telefono = '$telefono', comentario= '$comentario' WHERE idComentario=$idcomentario";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Comentario actualizado correctamente';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}
?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?idcomentario=<?php echo $_GET['idcomentario']; ?>" method="POST">
        <div class="form-group">
          <p>
              <input type="text" name="correo" class="form-control" placeholder="Correo" autofocus value="<?php echo $correo;?>">
          </p>
          <p>
              <input type="text" name="telefono" class="form-control" placeholder="Teléfono" autofocus value="<?php echo $telefono;?>"> 
          </p>
        </div>
        <div class="form-group">
        <textarea name="comentario" class="form-control" cols="30" rows="10"><?php echo $comentario;?></textarea>
        </div>
        <button class="btn-success" name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>