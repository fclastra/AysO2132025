<?php
 //ini_set('display_errors',1);
include 'conexion.php';

 $id=$_REQUEST["id"];
 $sql="delete from seg_usuarios where id='$id'";
 //$sql = "update oradores set activo='0' where id='$id'";
 $result=mysqli_query($conexion, $sql);
 
 echo "Usuario Borrado ID= ".$id;
 echo "<a href=index.php>Volver</a>"
 ?>
