<?php

session_start();
	require "ConectL.php";

	$username=$_POST['username'];
	$pass=$_POST['Pass'];
	$admin=false;



	$sql=mysqli_query($mysqli,"SELECT * FROM rol WHERE TypeRol='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){		
			if($admin!=$f['Administrador']){
			$_SESSION['Id_Rol']=$f['Id_Rol'];
			$_SESSION['TypeRol']=$f['TypeRol'];
			$_SESSION['Administrador']=$f['Administrador'];
			header("Location: ../InicioA.php");
			}else{
				$_SESSION['Id_Rol']=$f['Id_User'];
				$_SESSION['TypeRol']=$f['TypeRol'];
				header("Location: ../InicioU.php");	
			}
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			header("htdocs/Bathtime/index.php");
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		header("../index.php");	

	}

?>