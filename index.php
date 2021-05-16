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
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    

  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
  </body>
</html> 