function like_dislike(decide){
if (decide==0){

                if(isset($_POST['search'])) {
                    $idproducto=$_POST['idproducto'];
                    $query = "SELECT *  FROM comentarios WHERE idProducto=$idproducto and Tipo=0";
                    $result_usuario = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result_usuario)){
                        <tr>
                            <td>
                                echo $row['idProducto']; 
                            </td>
                            <td>
                                echo $row['Correo']; 
                            </td>
                            <td>
                                echo $row['Telefono']; 
                            </td>
                            <td>
                                echo $row['Comentario']; 
                            </td>
                            <td>
                                echo $row['Tipo']; 
                            </td>
                            <td>
                                <a href="edit.php?idcomentario=<?php echo $row['idComentario'] ?>">Editar</a>
                            </td>
                            <td>
                                <a href="delete.php?idcomentario=<?php echo $row['idComentario'] ?>">Eliminar</a>
                            </td>
                        </tr>
                        
                        }} 

}else{
    if(isset($_POST['search'])) {
        $idproducto=$_POST['idproducto'];
        $query = "SELECT *  FROM comentarios WHERE idProducto=$idproducto and Tipo=1";
        $result_usuario = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($result_usuario)){
            <tr>
                <td>
                    echo $row['idProducto']; 
                </td>
                <td>
                    echo $row['Correo']; 
                </td>
                <td>
                    echo $row['Telefono']; 
                </td>
                <td>
                    echo $row['Comentario']; 
                </td>
                <td>
                    echo $row['Tipo']; 
                </td>
                <td>
                    <a href="edit.php?idcomentario=<?php echo $row['idComentario'] ?>">Editar</a>
                </td>
                <td>
                    <a href="delete.php?idcomentario=<?php echo $row['idComentario'] ?>">Eliminar</a>
                </td>
            </tr>
            
            }} 
}   
}