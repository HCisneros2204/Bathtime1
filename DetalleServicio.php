<?php
include 'global/config.php';
include 'global/conexion.php';
include 'templates/header1.php';
include 'global/log.php';
?>



<div id="content" class="p-4 p-md-5 pt-5">
<?php //echo $mensaje ?>

<button class="btn btn-secondary">
<a class="nav-link" href="DetalleservicioS.php" style="color:aqua;">
Mostrar detalle de servicios (<?php 
echo(empty($_SESSION['Detalles']))?0:count($_SESSION['Detalles']);




?>)</a></button>

<table class="table table-sm table-light">
  <thead>
    <tr style="border-radius: 30px;">
    <th scope="col" ">Id_Servicio</th>
      <th scope="col" >Nombre del servicio</th>
      <th scope="col">Costo</th>
      <th scope="col">Tiempo </th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sentencia=$pdo->prepare("SELECT * FROM `catalogoservicios`");
    $sentencia->execute();
    $lista=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    
    ?>
    <?php foreach($lista as $usuario){
          echo'
          <tr>
          <td>'.$usuario['Id_servicio'].'</td>
          <td>'.$usuario['NombreServicio'].'</td>
          <td>'.$usuario['Costo'].'</td>
          <td>'.$usuario['Tiempo'].'</td>
         
          
          <td>
          <form method="POST" action="">
          <input type="hidden" name="idS" id="idS" value='.openssl_encrypt($usuario['Id_servicio'],COD,KEY).'></input>
          <input type="hidden" name="NombreS" id="Nombre" value='.openssl_encrypt($usuario['NombreServicio'],COD,KEY).'></input>
          <input type="hidden" name="CostoS" id="Costo" value='.openssl_encrypt($usuario['Costo'],COD,KEY).'></input>
          <input type="hidden" name="Tiempo" id="Tiempo" value='.openssl_encrypt($usuario['Tiempo'],COD,KEY).'></input>
          <button class="btn btn-secondary" type="submit" style="background-color:#CBAD14 ;"
          name="btnAccion" value="Agregar" >Agregar</button></form></td>
          
          </tr>';

     }?>
  </tbody>
</table>

		

</div>
