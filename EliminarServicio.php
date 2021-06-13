<?php
include 'global/config.php';
include 'global/conexion.php'; 
?>

<?php

if($_POST){
    @$id=$_POST['idSD'];


    $sentencia=$pdo->prepare("DELETE FROM `catalogoservicios` WHERE `Id_servicio` = :ID;");

    $sentencia->bindParam(":ID",$id);
    $sentencia->execute();
    header("location: GServicios.php");

}

?>