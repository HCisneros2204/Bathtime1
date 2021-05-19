<?php
include 'templates/header.php'

?>
        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Bienvenido </h2>
        <div style="padding: 10px;">
        <button type="button" class="btn btn-primary btn-lg" style="background-color: #2ED8A0;" ><span class="fa fa-shower mr-3"></span> Añadir nuevo Servicio de autolavado</button>
        <button type="button" class="btn btn-primary btn-lg " style="background-color: #07978B;"><span class="fa fa-table mr-3"></span>Gestion de tabla de espera</button>
        <a href="GClientes.php" ><button type="button" class="btn btn-primary btn-lg " style="background-color: #EED03A ;"><span class="fa fa-user-circle mr-3"></span>Nuevo Cliente?</button></a>
        </div>
        <table class="table table-sm table-dark">
  <thead>
    <tr style="border-radius: 30px;">
    <th scope="col" ">Horario</th>
      <th scope="col" >Nombre</th>
      <th scope="col">Modelo</th>
      <th scope="col">Matricula</th>
    </tr>
  </thead>
  <tbody>
  <tr class="table-success"><td class="bg-success">10:00-10:30</td><td class="bg-success">Juan Perez</td><td class="bg-success">Corza</td><td class="bg-success">JAHS123</td></tr>
  <tr class="table-warning"><td class="bg-warning">10:30-11:00</td><td class="bg-warning">Roberto Alfonso</td><td class="bg-warning">Corvette</td><td class="bg-warning">IANH12</td></tr>
  <tr class="table-danger"><td class="bg-danger">11:00-11:30</td><td class="bg-danger">Roberto Alfonso</td><td class="bg-danger">Corvette</td><td class="bg-danger">IANH12</td></tr>
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