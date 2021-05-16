<!DOCTYPE html>
<html lang="es">
<head>

</head>
<body>
  <h1>La Cantina de Chalmun</h1>
  	<nav class="menu">
		<ul>
			<li><a href="index.php">Menu</a></li>
            <li><a href="habitaciones.php">Habitaciones</a></li>
		</ul>
	</nav>

	
    <div class="caja">
		<main class="noticias">
			<form action="registro.php" method="post" name="formulario" >
				<p>Nombres: </p><input  id="Nombre" type="text" name="Nombre" required="">

			</form>
		</main>	
	</div>

	<article>
	  <div id="error"></div>	
	</article>
	</div>
	<footer class="foot">
		<a href=""></a>
		<a href=""></a>
		<a href=""></a>

		<p></p>
	</footer>
	<div class="error">
	</div>
<script>
	function validar(){
 var nombre,apellido,Fecha_Nac,username,correo,password;
 nombre = document.getElementById("Nombre").value;
 apellido = document.getElementById("Apellido").value;

 if(nombre==""||  apellido=="" || Fecha_Nac=="" || username=="" || correo==""|| password==""){
    alert("todos los campos son obligatorios");
    return false;
 }
 
}
</script>
</body>
</html>