<?php
//ini_set('display_errors',1);
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                   
                  
                </a>
                
            </div>
        </nav>
    </header>
    <main>

        <!-- otrapersona -->
        <section id="descripcionCategoria" class="container">
            <div  class="row justify-content-center">
                <p>Buscar</p>

        
<table border="1">
<tr   >
    <td cellpadding="5"  colspan="7"><a style="float:rigth;" href="alta.php">Nuevo Usuario</a>  </td>
</tr>
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Perfil</th>
    <th>Modificar</th>
    <th>Borrar</th>

</tr>
  <?php 

  $sql="select * from seg_usuarios";
  $result=mysqli_query($conexion, $sql);
    
  while ($row = mysqli_fetch_array($result)) {

    
  ?>
  
<tr>
     <td><?php echo $row["nombre"] ?></td>
     <td><?php echo $row["apellido"] ?></td>
     <td><?php echo $row["usuario"] ?></td>
        <td><?php echo $row["perfil"] ?></td>
     <td> <a href="modificar.php?id=<?php echo $row["id"] ?>">Modificar</a></td>
     <td><a href="borrar.php?id=<?php echo $row["id"] ?>">borrar</a></td>
</tr>
<?php } ?>
</table>
<div class="pagination pagination-centered">
						  <ul>
							
						  </ul>
						</div>     
<br><br>

                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>


    </main>

    <footer>
        
    </footer>

   
   
   
</body>

</html>