<?php 
session_start();
if($_SESSION['Detalles']){	
	session_destroy();
	header("location:../DetallesServicioU.php");
}
else{

}
?>