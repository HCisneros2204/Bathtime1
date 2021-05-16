

<!DOCTYPE html>

<html lang="es">
<head>
	<title>La Cantina de Chalmun</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
<link rel="icon" type="image/png" href="IMAGES/icono.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body background="IMAGES/fondo.jpg">
  <h1>La Cantina de Chalmun</h1>
  <div>

	<div class="login">
		<form action="login.php" method="POST" name="login" id="login">
			<p style=" position:relative; left:13px;">Usuario: </p><input style=" position:relative;left:13px;" type="text" name="usuario" id="usuario" required="">
      <p style=" position:relative;left:13px;">Contraseña: </p><input style=" position:relative;left:13px;"
      type="password" id="pass" name="pass" required="">
      <br>
			<button class="botones" type="submit">ingresar</button>
			<button class="botones"><a href="registroP.php" style="text-decoration: none;">registrarse</a></button>
		</form>
	</div>
  </div>
	
	

</body>
</html>