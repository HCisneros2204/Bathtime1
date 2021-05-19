<?php
include 'templates/header.php';
?>


<?php
if($_POST){
    @$id=$_POST['idU'];
    @$NombreC=$_POST['Nombre'];
    @$Telefono=$_POST['Telefono'];
    @$CorreoC=$_POST['Correo'];
    @$DireccionC=$_POST['Direccion'];


            
 }?>
<div id="content" class="p-4 p-md-5 pt-5">


<div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Actualizacion de datos del cliente</h3>
            <p class="black-text"> Ingresa los datos personales del cliente.</p>
            <div class="card">
                
                <form class="form-card" action="global/LogU.php" method="post">
                <div class="Img" style=" left:50%; border-radius: 100%; background-color:#EEEAD7; ">
                <img src="media/Vector_User.png" alt="" style="width: 40px; height:40px;"></img>
                </div>
                <br>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nombre<span class="text-danger"> *</span></label> <input placeholder=" " type="text" id="Nombre" name="Nombre"  required value="<?php echo $NombreC ?>"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Telefono<span class="text-danger"> *</span></label> <input type="text" id="Telefono" name="Telefono" required" value="<?php echo $Telefono ?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Correo<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" value="<?php echo $CorreoC?>"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Direccion<span class="text-danger"> *</span></label> <input type="text" id="Direccion" name="Direccion" placeholder="" value="<?php echo $DireccionC?>"> </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Actualizar Cliente</button> </div>
                    </div>
                    <input type="hidden" name="idM" id="idM" value="<?php echo $id ?>"></input>
                </form>