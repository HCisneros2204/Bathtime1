<?php
include 'config.php';
include 'conexion.php'; 

?>

<?php

if($_POST){
    @$id=$_POST['id'];

    $sentencia=$pdo->prepare("DELETE FROM `tblventas` WHERE `ID` = :ID;");

    $sentencia->bindParam(":ID",$id);
    $sentencia->execute();
    
    header("location: ../GestionTablaU.php");

}
