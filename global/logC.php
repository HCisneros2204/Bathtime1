<?php
session_start();
$mensaje="";

if(isset($_POST['btnAccion'])){
switch($_POST['btnAccion']){

    case  'Agregar':
        if(is_numeric(openssl_decrypt ($_POST['idS'],COD,KEY))){
            $ID=openssl_decrypt ($_POST['idS'],COD,KEY);
            $mensaje.=" ID-> ".$ID;

        }else{
            $mensaje.="algo salio mal".$ID;
        }
        if(is_string(openssl_decrypt ($_POST['NombreS'],COD,KEY))){
            $NOMBRE=openssl_decrypt ($_POST['NombreS'],COD,KEY);
            $mensaje.=" Nombre->".$NOMBRE;

        }else{
            $mensaje.="algo salio mal".$NOMBRE;
        }
        if(is_numeric(openssl_decrypt ($_POST['CostoS'],COD,KEY))){
            $COSTO=openssl_decrypt ($_POST['CostoS'],COD,KEY);
            $mensaje.=" Costo -> ".$COSTO;

        }else{
            $mensaje.="algo salio mal".$COSTO;
        }
        if(is_string(openssl_decrypt ($_POST['Tiempo'],COD,KEY))){
            $TIEMPO=openssl_decrypt ($_POST['Tiempo'],COD,KEY);
            $mensaje.=" Tiempo -> ".$TIEMPO." ";
            

        }else{
            $mensaje.="algo salio mal".$TIEMPO;
        }

        if(!isset($_SESSION['TypeRol'])){
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'COSTO'=>$COSTO,
                'TIEMPO'=>$TIEMPO
            );
        $_SESSION['TypeRol'][0]=$producto;
        }else{
            $NumeroProductos=count($_SESSION['TypeRol']);
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'COSTO'=>$COSTO,
                'TIEMPO'=>$TIEMPO
            );
            $_SESSION['TypeRol'][$NumeroProductos]=$producto;
        }
        $mensaje=print_r($_SESSION,true);
    break;

    case "Eliminar":
        if(is_numeric(openssl_decrypt ($_POST['id'],COD,KEY))){
            $ID=openssl_decrypt ($_POST['id'],COD,KEY);
            
            foreach($_SESSION['TypeRol'] as $indice=>$producto){
                if($producto['ID']==){

                }
                
            }

        }else{
            $mensaje.="algo salio mal".$ID;

        }
        break;

}

}
