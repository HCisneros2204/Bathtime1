<?php
session_start();
$mensaje="";
$alerta="";
$MensajeCantidad="";

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

        if(!isset($_SESSION['Detalles'])){
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'COSTO'=>$COSTO,
                'TIEMPO'=>$TIEMPO
            );
        $_SESSION['Detalles'][0]=$producto;
        $alerta="servicio agregado";
        }else{
            $idpro=array_column($_SESSION['Detalles'],"ID");
            if(in_array($ID,$idpro)){
                echo"<script>alert('El producto ya esta agregado');</script>";
            }else{
            $NumeroProductos=count($_SESSION['Detalles']);
            $producto=array(
                'ID'=>$ID,
                'NOMBRE'=>$NOMBRE,
                'COSTO'=>$COSTO,
                'TIEMPO'=>$TIEMPO
            );
            $_SESSION['Detalles'][$NumeroProductos]=$producto;
            $alerta="servicio agregado";
        }
        }
        
    break;

    case "Eliminar":
        if(is_numeric(openssl_decrypt ($_POST['idD'],COD,KEY))){
            $ID=openssl_decrypt ($_POST['idD'],COD,KEY);
            
            foreach($_SESSION['Detalles'] as $indice=>$producto){
                if($producto['ID']==$ID){
                    unset($_SESSION['Detalles'][$indice]);
                    echo "<script>alert('servicio borrado');</script>";
                }
                
            }

        }else{
            $mensaje.="algo salio mal".$ID;

        }
        break;

}

}
