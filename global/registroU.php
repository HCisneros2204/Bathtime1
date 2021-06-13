<?php
include 'config.php';
include 'conexion.php';
?>

<?php 
if($_POST){
    @$Nombre=$_POST['Nombre'];
    @$Telefono=$_POST['Telefono'];
    @$Email=$_POST['email'];
    @$Direccion=$_POST['Direccion'];



    $sentencia=$pdo->prepare("INSERT INTO `cliente` (`Id_Cliente`, `NombreCliente`, `Telefono`, `Correo`, `Direccion`) 
     VALUES 
    (NULL,:Nombre ,:Telefono,:Email,:Direccion);");

    $sentencia->bindParam(":Nombre",$Nombre);
    $sentencia->bindParam(":Telefono",$Telefono);
    $sentencia->bindParam(":Email",$Email);
    $sentencia->bindParam(":Direccion",$Direccion);
    $sentencia->execute();

    echo '<script>alert("Registro con exito")</script> ';
    header("Location: ../InicioU.php");
}