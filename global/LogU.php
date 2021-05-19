<?php
include 'config.php';
include 'conexion.php';
?>

<?php 
if($_POST){
    @$NombreU=$_POST['Nombre'];
    @$TelefonoU=$_POST['Telefono'];
    @$EmailU=$_POST['email'];
    @$Direccion=$_POST['Direccion'];
    @$idAC=$_POST['idM'];

    echo($NombreU)."<br>";
    echo($TelefonoU)."<br>";
    echo($EmailU."<br>");
    echo($Direccion)."<br>";
    echo($idAC)."<br>";
;

$sentencia=$pdo->prepare("UPDATE `cliente` SET `NombreCliente`=:nomb,`Telefono`=:Tel,`Correo`=:Email,`Direccion` = :Dir
 WHERE `cliente`.`Id_Cliente` = $idAC;");

    $sentencia->bindParam(":nomb",$NombreU);
    $sentencia->bindParam(":Tel",$TelefonoU);
    $sentencia->bindParam(":Email",$EmailU);
    $sentencia->bindParam(":Dir",$Direccion);
    $sentencia->execute();
    header("location: ../GClientes.php");


        
    }

