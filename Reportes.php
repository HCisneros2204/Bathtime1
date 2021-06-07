<?php
include 'global/config.php';
include 'global/conexion.php';
include 'templates/header.php';

?>
<?php
	session_start();
	if (@!$_SESSION['TypeRol']) {
		header("Location:index.php");
  }
  ?>

<div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">seccion de reportes</h2>


        
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Tipo de reporte</th>
      <th scope="col">---</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Reporte de clientes</th>
    <td><form action="pdf.php" method="POST">
    <button name="btnAccion" value="clientes" type="submit" class="btn btn-light">Emitir</button>
    </form></td>
    </tr>
    <tr>
      <th scope="row">Reporte de ventas</th>
      <td><form action="pdf.php" method="POST">
    <button name="btnAccion" value="ventas" type="submit" class="btn btn-light">Emitir</button>
    </form></td>
    </tr>
    <tr>
      <th scope="row">Reporte de servicios</th>
      <td><form action="pdf.php" method="POST">
    <button name="btnAccion" value="servicios" type="submit" class="btn btn-light">Emitir</button>
    </form></td>
    </tr>
  </tbody>
</table>
        

</div>

</body>
</html>


