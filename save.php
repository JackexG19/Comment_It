<?php 

include("db.php");

if(isset($_POST['save'])) { //si existe save, guardar en cada variable los datos ingresados por el usuario
    $idproducto=$_POST['idproducto'];  //guardo cada dato ingredado
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono']; 
    $comentario=$_POST['comentario'];
    $tipo=$_POST['tipo'];

    $query="INSERT INTO comentarios(idProducto, Correo, Telefono, Comentario, Tipo) VALUES ('$idproducto', '$correo', '$telefono', '$comentario', '$tipo')"; //guardo cada variable en la tabla usuario de mi base de datos
    $result=mysqli_query($conn, $query); 

    if (!$result) { //si result no es cierto dar un mensaje de fail
        die("Fail");
    }
    

    $_SESSION['message'] = "Guardado con éxito.";
    $_SESSION['message_type'] = 'success';


    header("Location: index.php");
}

?>