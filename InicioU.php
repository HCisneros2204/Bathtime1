echo"<script>alert('Bienvenido Usuario')</script>";
<?php
	session_start();
	if (@!$_SESSION['TypeRol']) {
		header("Location:index.php");
  }
  ?>