<?php
$servidor="mysql:dbname=".BD.";host=".Servidor;

try{
    $pdo= new PDO($servidor,usuario,Password,array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
    //echo"<script>alert('Bienvenido a la tienda Online de la cantina de chalmun')</script>";
}catch(PDOException $e){
    //echo"<script>alert('Error con la conexion a la tienda, intente mas tarde')</script>";
}
?>