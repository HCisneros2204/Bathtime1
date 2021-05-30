<?php 
session_start();
if($_SESSION['TypeRol']){	
	session_destroy();
	header("location:../index.php");
}
else{

}
?>