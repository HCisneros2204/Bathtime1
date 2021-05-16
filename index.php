

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
  	<nav class="menu">
		<ul>
            <li><a href="index.php">Menu</a></li>        
            <li><a href="habitaciones.php">Habitaciones</a></li>
        </ul>
	</nav>

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
	
	<div class="contenedor">
	
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="IMAGES/slide-1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Habitacion pequeña</h5>
    <p>Conoce nuestra nueva area de juegos (exclusivo para 2 personas)</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGES/HabitacionD.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Habitacion Deluxe</h5>
    <p>Habitacion con las mejores comodidades. Consulta nuestras promociones</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="IMAGES/habitacionS.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Habitacion Sencilla</h5>
    <p>Consulta nuestras promociones por reservar esta habitacion!</p>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
	<div class="mapa" style="position: absolute; ; left: 900px; float: right;">
	<iframe  style="width: 250px; height: 250px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.3851164058724!2d-103.41435318575984!3d20.73517910311313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428af73ea9ffa03%3A0xd87baf8e7cda11de!2sAv%20Tuzania%20358%2C%20La%20Tuzania%2C%2045130%20Zapopan%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1583212263164!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	
        <img src="IMAGES/arrow.png" style="width: 50px; height: 50px; transform: rotate(133deg); padding-left: 40px;"><p style="color:white; font-family: Arial;position: absolute;left: 250px; transform: rotate(40deg); font-size:30px;">Visítanos!</p>
	</div>	
	<div class="pie">
	<footer>
		<ul >
			<li>conocenos</li>
			<li><a href="contactanos.php">contacto</a></li>
			<li>terminos y condiciones</li>
		</ul>
		<p style="position:absolute; left: 230px; color: yellow; font-family: Arial; font-size: 10px;">Patrocinadores</p><br>
		<div class="sponsor">
		<ul>
			<li><a href="https://www.xbox.com/es-MX/"><img src="IMAGES/xbox.png"></a></li>
			<li><a href="https://www.twitch.tv/"><img src="IMAGES/twitch.png"></a></li>
			<li><a href="https://www.redbull.com/au-en/collections/gaming"><img src="IMAGES/redbull.png"></a></li>
			<li><a href="https://www.nvidia.com/es-la/"><img src="IMAGES/nvidia.png"></a></li>
		</ul>
	</div>
	</footer>
	</div>
</body>
</html>