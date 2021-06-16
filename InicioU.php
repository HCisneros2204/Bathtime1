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
        <h2 class="mb-4">Bienvenido </h2>
        <div style="padding: 10px;">
        <a href="DetallesServicioU.php" ><button type="button" class="btn btn-primary btn-lg" style="background-color: #2ED8A0;" ><span class="fa fa-shower mr-3"></span> Añadir nuevo Servicio de autolavado</button></a>
        <a href="GestionTablaU.php" ><button type="button" class="btn btn-primary btn-lg " style="background-color: #07978B;"><span class="fa fa-table mr-3"></span>Gestion de tabla de espera</button>
        <a href="GClientesU.php" ><button type="button" class="btn btn-primary btn-lg " style="background-color: #EED03A ;"><span class="fa fa-user-circle mr-3"></span>Nuevo Cliente?</button></a>
        </div>
        <table class="table table-sm table-dark">
  <thead>
    <tr style="border-radius: 30px;">
    <th scope="col" ">Folio de servicio</th>
      <th scope="col" >Nombre</th>
      <th scope="col">Modelo</th>
      <th scope="col">Matricula</th>
      <th scope="col">Marca</th>
      <th scope="col">total</th>
      <th scope="col">Horas Totales</th>
      <th scope="col">Hora de inicio</th>
      <th scope="col">Hora de termino</th>
    </tr>
  </thead>
  <tbody>
  <?php
     $sentencia=$pdo->prepare("SELECT T.ID, T.Id_Cliente as IDu, C.NombreCliente as cliente,
     T.Modelo,T.Marca,T.Matricula,T.Total,T.HorasTotal,T.TiempoInicial,T.TiempoFinal
     FROM `tblventas` T 
            INNER JOIN `cliente` C ON T.Id_Cliente=C.Id_Cliente");
        $sentencia->execute();
        $lista=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        ?>
        <?php foreach($lista as $usuario){?>

        <tr>
        <td><?php echo($usuario['ID'])?></td>
        <td><?php echo($usuario['cliente'])?></td>
        <td><?php echo($usuario['Modelo'])?></td>
        <td><?php echo($usuario['Matricula'])?></td>
        <td><?php echo($usuario['Marca'])?></td>
        <td><?php echo($usuario['Total'])?></td>
        <td><?php echo($usuario['HorasTotal'])?></td>
        <td><?php echo($usuario['TiempoInicial'])?></td>
        <td><?php echo($usuario['TiempoFinal'])?></td>
          <td><form method="POST" action="global/EliminarCliente.php">
          <input type="hidden" name="id" id="id" value="<?php echo($usuario['Id_Cliente'])?>"></input>
          <button class="btn btn-secondary" type="submit" name="eliminar" value="Eliminar" >
          <i class="fa fa-print" aria-hidden="true"></i>Imprimir ticket</button>
          </form></td>
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