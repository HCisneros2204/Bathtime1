<?php
include 'config.php';
include 'conexion.php';
?>

<?php 
if($_POST){
    @$NombreU=$_POST['NombreUS'];
    @$Costo=$_POST['Costo'];
    @$Tiempo=$_POST['tiempo'];
    @$idS=$_POST['idM'];

 echo($NombreU);
 echo($Costo);
 echo($Tiempo);
 echo($idS);

$sentencia=$pdo->prepare("UPDATE `catalogoservicios` SET
 `NombreServicio`=:nomb,`Costo`=:Cost,`Tiempo`=:tiempo
 WHERE `catalogoservicios`.`Id_servicio` = $idS;");

    $sentencia->bindParam(":nomb",$NombreU);
    $sentencia->bindParam(":Cost",$Costo);
    $sentencia->bindParam(":tiempo",$Tiempo);
    $sentencia->execute();
    header("location: ../GServicios.php");


        
    }

