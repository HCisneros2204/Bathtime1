<?php
include 'templates/header1.php';
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
        <h2 class="mb-4">Gestor de clientes </h2>

        <div style="padding: 10px;">
            <a href="RegistroClienteU.php" ><button type="button" class="btn btn-primary btn-lg " style="background-color: #EED03A;"><span class="fa fa-user-circle mr-3"></span>Agregar Nuevo Cliente</button></a>
                          <form action="BuscarClU.php" method="GET">
                            <div class="input-group rounded" style="padding-top: 10px; ">
                                <input type="search" class="form-control rounded" placeholder="Buscar al cliente..." aria-label="Search"
                                    aria-describedby="search-addon" name="busqueda"/>    
                                <button type="submit" class="btn btn-outline-primary" name="enviar" id="enviar">
                                    <i class="fa fa-search"></i>
                                </span>
                            </div>
                            </form>

        </div>
        
<table class="table table-sm table-dark">
  <thead>
    <tr style="border-radius: 30px;">
    <th scope="col" ">ID Cliente</th>
      <th scope="col" >Nombre cliente</th>
      <th scope="col">Telefono</th>
      <th scope="col">Correo</th>
      <th scope="col">Direccion</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sentencia=$pdo->prepare("SELECT * FROM `cliente`");
    $sentencia->execute();
    $lista=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <?php foreach($lista as $usuario){?>
         
          <tr>
          <td><?php echo($usuario['Id_Cliente'])?></td>
          <td><?php echo($usuario['NombreCliente'])?></td>
          <td><?php echo($usuario['Telefono'])?></td>
          <td><?php echo($usuario['Correo'])?></td>
          <td><?php echo($usuario['Direccion'])?></td>
          
          
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