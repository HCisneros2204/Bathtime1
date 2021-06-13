<?php
include 'templates/header.php';
include 'global/config.php';
include 'global/conexion.php';
?>

<?php
	session_start();
	if (@!$_SESSION['TypeRol']) {
		header("Location:index.php");
  }
  ?>

  
 <!-- Page Content  -->
 <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Gestor de servicios </h2>

        <div style="padding: 10px;">
            <a href="RegistroServicios.php" ><button type="button" class="btn btn-primary btn-lg " style="background-color: #EED03A;"><span class="fa fa-briefcase mr-3"></span>Agregar Nuevo Servicio</button></a>
                         

        </div>
        
<table class="table table-sm table-dark">
  <thead>
    <tr style="border-radius: 30px;">
    <th scope="col" ">ID servicio</th>
      <th scope="col" >Nombre del servicio</th>
      <th scope="col">costo</th>
      <th scope="col">duracion</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sentencia=$pdo->prepare("SELECT * FROM `catalogoservicios`");
    $sentencia->execute();
    $lista=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($lista as $usuario){?>
         
          <tr>
          <td><?php echo($usuario['Id_servicio'])?></td>
          <td><?php echo($usuario['NombreServicio'])?></td>
          <td><?php echo($usuario['Costo'])?></td>
          <td><?php echo($usuario['Tiempo'])?></td>
          <td>
          <form method="POST" action="EliminarServicio.php">
          <input type="hidden" name="idSD" id="idSD" value="<?php echo($usuario['Id_servicio'])?>"></input>
          <button class="btn btn-danger" type="submit" name="eliminar" value="Eliminar" >Eliminar</button>
          </form>
          </td>
          
          <td>
          <form method="POST" action="ActualizarCl.php">
          <input type="hidden" name="idU" id="idU" value="<?php echo($usuario['Id_Servicio'])?>"></input>
          <input type="hidden" name="Nombre" id="Nombre" value="<?php echo($usuario['NombreServicio'])?>"></input>
          <input type="hidden" name="Telefono" id="Telefono" value="<?php echo($usuario['Costo'])?>"></input>
          <input type="hidden" name="Correo" id="Correo" value="<?php echo($usuario['Tiempo'])?>"></input>
          <button class="btn btn-secondary" type="submit" style="background-color:#CBAD14 ;"
          name="btnAccion" value="" >modificar</button></form></td>
          
          </tr>

     
    <?php }?>
  </tbody>
</table>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>

</html>