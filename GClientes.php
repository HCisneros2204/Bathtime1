<?php
include 'templates/header.php';
include 'global/config.php';
include 'global/conexion.php';
?>

 <!-- Page Content  -->
 <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Gestor de clientes </h2>

        <div style="padding: 10px;">
            <a href="RegistroCliente.php" ><button type="button" class="btn btn-primary btn-lg " style="background-color: #EED03A;"><span class="fa fa-user-circle mr-3"></span>Agregar Nuevo Cliente</button></a>
                          <form action="BuscarCl.php" method="GET">
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
    <?php foreach($lista as $usuario){
          echo'
          <tr>
          <td>'.$usuario['Id_Cliente'].'</td>
          <td>'.$usuario['NombreCliente'].'</td>
          <td>'.$usuario['Telefono'].'</td>
          <td>'.$usuario['Correo'].'</td>
          <td>'.$usuario['Direccion'].'</td>
          <td>
          <form method="POST" action="global/EliminarCliente.php">
          <input type="hidden" name="id" id="id" value='.$usuario['Id_Cliente'].'></input>
          <button class="btn btn-danger" type="submit" name="eliminar" value="Eliminar" >Eliminar</button>
          </form>
          </td>
          
          <td>
          <form method="POST" action="ActualizarCl.php">
          <input type="hidden" name="idU" id="idU" value='.$usuario['Id_Cliente'].'></input>
          <input type="hidden" name="Nombre" id="Nombre" value='.$usuario['NombreCliente'].'></input>
          <input type="hidden" name="Telefono" id="Telefono" value='.$usuario['Telefono'].'></input>
          <input type="hidden" name="Correo" id="Correo" value='.$usuario['Correo'].'></input>
          <input type="hidden" name="Direccion" id="idU" value='.$usuario['Direccion'].'></input>
          <button class="btn btn-secondary" type="submit" style="background-color:#CBAD14 ;"
          name="btnAccion" value="ActualizarUser" >modificar</button></form></td>
          
          </tr>';

     }?>
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