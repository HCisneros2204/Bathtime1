<?php
include 'global/config.php';
include 'global/conexion.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/estilos.css" rel="stylesheet">
    <script src="JS/bootstrap.min.js"></script>
    

    <title>Bath time-Inicio de sesion</title>
 </head>
 <body>
 <!--cuerpo del programa -->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="Media/auto_car-08.jpg" id="icon" alt="User Icon" />
      <h1>Bath time</h1>
    </div>

    <!-- Login Form -->
    <form action="global/login.php" method="POST" name="login" id="login">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="password" id="Pass" class="fadeIn third" name="Pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    

  </div>
</div>
  </body>
</html> 