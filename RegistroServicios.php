<?php
include 'templates/header.php';
?>
<?php
	session_start();
	if (@!$_SESSION['TypeRol']) {
		header("Location:index.php");
  }
  ?>

<div id="content" class="p-4 p-md-5 pt-5">


<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Registro del servicio a ofrecer</h3>
            <p class="black-text"> Ingresa los datos del servicio</p>
            <div class="card">
                
                <form class="form-card" action="global/registroS.php" method="post">
                <div class="Img" style=" left:50%; border-radius: 100%; background-color:#EEEAD7; ">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                </div>
                <br>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nombre del servicio<span class="text-danger"> </span></label> <input type="text" id="NombreS" name="NombreS" placeholder="" required> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Costo Unitario del servicio<span class="text-danger"> </span></label> <input type="text" id="CostoS" name="CostoS" placeholder="" required"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Duracion<span class="text-danger"> </span></label> <input type="text" id="Tiempo" name="Tiempo" placeholder=""> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Registrar Usuario</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</body>

</html>