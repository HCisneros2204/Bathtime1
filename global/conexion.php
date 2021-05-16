<?php
$servidor="mysql:dbname=".BD.";host=".Servidor;

try{
    $pdo= new PDO($servidor,usuario,Password,array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
    //echo"<script>alert('Bienvenido a la tienda Online de la cantina de chalmun')</script>";
}catch(PDOException $e){
    //echo"<script>alert('Error con la conexion a la tienda, intente mas tarde')</script>";
}
/*<div class="login">
<form action="login.php" method="POST" name="login" id="login">
<p style=" position:relative; left:13px;">Usuario: </p><input style=" position:relative;left:13px;" type="text" name="usuario" id="usuario" required="">
<p style=" position:relative;left:13px;">Contraseña: </p><input style=" position:relative;left:13px;"
type="password" id="pass" name="pass" required="">
<br>
<button class="botones" type="submit">ingresar</button>
</form>
</div>
</div>*/
?>


