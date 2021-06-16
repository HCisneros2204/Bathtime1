<?php
include 'templates/header.php';
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
    $horaT=$_POST['HorasTotales'];
    $horaini=$_POST['HoraIni'];
    $horaF=$_POST['HoraFinal'];

    echo($horaT);
    echo("");
    echo($horaini);
    echo("");
    echo($horaF);

    
    foreach($_SESSION['Detalles'] as $indice=>$producto){

        $total=$total+($producto['COSTO']);
        
    }
    
        $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
        (`ID`, `Id_Cliente`, `Modelo`, `Matricula`, `Marca`, `Total`,`HorasTotal`,`TiempoInicial`,`TiempoFinal`) 
        VALUES (NULL, :IDCL, :MODELO, :MATRICULA, :MARCA, :TOTAL,:HORAST,:HORAI,:HORAF);");

    $idVenta=$pdo->lastInsertId();
    $sentencia->bindParam(":IDCL",$IDCLiente);
    $sentencia->bindParam(":MODELO",$Modelo);
    $sentencia->bindParam(":MATRICULA",$matricula);
    $sentencia->bindParam(":MARCA",$Marca);
    $sentencia->bindParam(":TOTAL",$total);
    $sentencia->bindParam(":HORAST",$horaT);
    $sentencia->bindParam(":HORAI",$horaini);
    $sentencia->bindParam(":HORAF",$horaF);

    $sentencia->execute();


    $sentencia2=$pdo->prepare("INSERT INTO `rtblventa` 
        (`ID`, `Id_Cliente`, `Modelo`, `Matricula`, `Marca`, `Total`) 
        VALUES (:IDVenta, :IDCL, :MODELO, :MATRICULA, :MARCA, :TOTAL);");
    $idVenta=$pdo->lastInsertId();
    $sentencia2->bindParam(":IDVenta",$idVenta);
    $sentencia2->bindParam(":IDCL",$IDCLiente);
    $sentencia2->bindParam(":MODELO",$Modelo);
    $sentencia2->bindParam(":MATRICULA",$matricula);
    $sentencia2->bindParam(":MARCA",$Marca);
    $sentencia2->bindParam(":TOTAL",$total);
    $sentencia2->execute();

    foreach($_SESSION['Detalles'] as $indice=>$producto){
        $sentencia=$pdo->prepare("INSERT INTO `detalle_venta`
         (`ID`, `Id_venta`, `ID_Servicio`, `Precio_S`) 
        VALUES (NULL, :IDVenta, :IDSERVICIO, :PRECIO_S);");


        $sentencia->bindParam(":IDVenta",$idVenta);
        $sentencia->bindParam(":IDSERVICIO",$producto['ID']);
        $sentencia->bindParam(":PRECIO_S",$producto['COSTO']);
        $sentencia->execute();

    }

    foreach($_SESSION['Detalles'] as $indice=>$producto){
        $sentencia2=$pdo->prepare("INSERT INTO `rdetalleventa`
         (`ID`, `Id_venta`, `ID_Servicio`, `Precio_S`) 
        VALUES (NULL, :IDVenta, :IDSERVICIO, :PRECIO_S);"); 


        $sentencia2->bindParam(":IDVenta",$idVenta);
        $sentencia2->bindParam(":IDSERVICIO",$producto['ID']);
        $sentencia2->bindParam(":PRECIO_S",$producto['COSTO']);
        $sentencia2->execute();

    }
    header("Location:global/CloseCon.php");

    
}

?>