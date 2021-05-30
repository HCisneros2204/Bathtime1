<?php 
session_start();
if($_SESSION['Detalles']){	
	session_destroy();
	header("location:../DetalleServicio.php");
}
else{

}
?>