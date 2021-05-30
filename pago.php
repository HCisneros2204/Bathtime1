<?php
include 'templates/header1.php';
include 'global/config.php';
include 'global/conexion.php';
include 'global/log.php';
?>

<div id="content" class="p-4 p-md-5 pt-5">
<h3>Detalles del servicio</h3>

<?php 
if($_POST){
    $total=0;
    $SID=session_id();
    $IDCLiente=$_POST['ID_Cliente'];
    $Modelo=$_POST['Modelo'];
    $matricula=$_POST['Matricula'];
    $Marca=$_POST['Marca'];


    
    foreach($_SESSION['Detalles'] as $indice=>$producto){

        $total=$total+($producto['COSTO']);
    }
        $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
        (`ID`, `Id_Cliente`, `Modelo`, `Matricula`, `Marca`, `Total`) 
        VALUES (NULL, :IDCL, :MODELO, :MATRICULA, :MARCA, :TOTAL);");

    $sentencia->bindParam(":IDCL",$IDCLiente);
    $sentencia->bindParam(":MODELO",$Modelo);
    $sentencia->bindParam(":MATRICULA",$matricula);
    $sentencia->bindParam(":MARCA",$Marca);
    $sentencia->bindParam(":TOTAL",$total);
    $sentencia->execute();
    $idVenta=$pdo->lastInsertId();

    foreach($_SESSION['Detalles'] as $indice=>$producto){
        $sentencia=$pdo->prepare("INSERT INTO `detalle_venta`
         (`ID`, `Id_venta`, `ID_Servicio`, `Precio_S`) 
        VALUES (NULL, :IDVenta, :IDSERVICIO, :PRECIO_S);"); 


        $sentencia->bindParam(":IDVenta",$idVenta);
        $sentencia->bindParam(":IDSERVICIO",$producto['ID']);
        $sentencia->bindParam(":PRECIO_S",$producto['COSTO']);
        $sentencia->execute();

    }
    header("Location:global/CloseCon1.php");

    
}

?>