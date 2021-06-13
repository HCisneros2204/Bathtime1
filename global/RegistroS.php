<?php
include 'config.php';
include 'conexion.php';
?>

<?php 
if($_POST){
    @$Nombre=$_POST['NombreS'];
    @$Costo=$_POST['CostoS'];
    @$Tiempo=$_POST['Tiempo'];



    $sentencia=$pdo->prepare("INSERT INTO `catalogoservicios` (`Id_Servicio`, `NombreServicio`, `Costo`, `Tiempo`) 
     VALUES 
    (NULL,:Nombre ,:Costo,:tiempo);");

    $sentencia->bindParam(":Nombre",$Nombre);
    $sentencia->bindParam(":Costo",$Costo);
    $sentencia->bindParam(":tiempo",$Tiempo);
    $sentencia->execute();

    echo '<script>alert("Registro con exito")</script> ';
    header("Location: ../GServicios.php");
}