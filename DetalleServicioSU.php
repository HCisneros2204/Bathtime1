<?php
include 'templates/header1.php';
include 'global/config.php';
include 'global/conexion.php';
include 'global/log.php';


$horasdb=array();
    foreach($_SESSION['Detalles'] as $indice=>$producto){

            array_push($horasdb,$producto['TIEMPO']);
    }


     function sumarHoras($horas) {
         $total = 0;
         foreach($horas as $h) {
             $parts = explode(":", $h);
             $total += $parts[2] + $parts[1]*60 + $parts[0]*3600;        
         }   
         return gmdate("H:i:s", $total);
     }

     $HorasTotales=sumarHoras($horasdb);

        

?>

<div id="content" class="p-4 p-md-5 pt-5">
<h3>Detalles del servicio</h3>
<?php if(!empty($_SESSION['Detalles'])){?>
<a href="DetalleServicio.php"><button type="button" class="btn btn-secondary">Gestion de servicios</button></a>
<table class="table table-light">

    <tbody>
    <tr >
    <th style="font-size: 30px; color:gray;" width="50%">
            <img src="media/auto_car-08.jpg" style ="width:100px; height:100px;" alt="">
            Ticket de servicio
            </th>
    </tr>
        <tr>
            <th width="20%">Descripcion</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="30%">Hora/Unitaria</th>
            <th width="30%">---</th>
        </tr>
        <?php $Subtotal=0;?>
        
        <?php foreach($_SESSION['Detalles'] as $indice=>$producto){?> 
        <tr>
        <td width="30%"><?php echo($producto['NOMBRE'])?></th>
            <td width="20%" class="text-center"><?php echo($producto['COSTO'])?></th>
            <td width="30%"><?php echo($producto['TIEMPO'])?></th>

            <form action="" method="post">
            <input type="hidden" name="idD" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
            <td width="20%"><button class="btn btn-danger"
            type="submit"
            name="btnAccion"
            value="Eliminar"
            >Eliminar</button></th>
            </form>

        </tr>
        <?php $Subtotal=$Subtotal+$producto['COSTO'];
              $IVA=$Subtotal*.10;
              $total=$Subtotal+$IVA;?>
        <?php }?>
        <tr>
        <tr>
        <tr>
        <tr>
        <td width="20%" >Subtotal</td>
        <td><?php echo number_format($Subtotal,2);?></td>
        </tr>
        <td width="20%">IVA</td>
        <td><?php echo number_format($IVA,2);?></td>
        </tr>
        <td width="20%">Total</td>
        <td><?php echo number_format($total,2);?></td>
        </tr>
        <tr>
        <td width="10%"><td>Tiempo Total</td>
        <td><?php echo($HorasTotales) ;?></td></tr>
        
        <tr>
        <td width="10%"><td>Tiempo Inicial</td>
        <td><?php
        date_default_timezone_set('America/Mexico_City');
        $hoy = date("H:i:s");
        $Timeinit=$hoy;
        echo($Timeinit);?></td></tr>

        <tr>
        <td width="10%"><td>Tiempo Final</td>
        <td><?php

       // Separamos el tiempo en un array para pasarlo a segundos
        function explode_tiempo($tiempo) {
            $arr_tiempo = explode(':', $tiempo);
            $segundos = $arr_tiempo[0] * 3600 + $arr_tiempo[1] * 60 + $arr_tiempo[2];
            return $segundos;
        }

        // Transformar los segundos en hora formato HH:mm:ss
        function segundos_hhmm($seg) {
            $horas = floor($seg / 3600);
            $minutos = floor($seg / 60 % 60);
            $segundos = floor($seg % 60);

            return sprintf('%02d:%02d:%02d', $horas, $minutos, $segundos);
        }

        $hora1 = $HorasTotales;
        $hora2 = $Timeinit;

        $h1 = explode_tiempo($hora1);
        $h2 = explode_tiempo($hora2);

        $total_tiempo_segundos = $h1 + $h2;

        $TiempoFinal=segundos_hhmm($total_tiempo_segundos);

        echo ($TiempoFinal);
        
        ?></td></tr>

        </tr>

    <tr>
   


    <td colspan="5">
            <form action="pago1.php" method="POST">
            <div class="alert alert-primary" role="alert">
                Datos del cliente y su auto
                <br>
                <br>
            
            <label for="my-input">cliente</label>
            <select name="ID_Cliente" class="custom-select mb-3" class="Desp">
                      <?php
                            $sentencia=$pdo->prepare("SELECT * FROM `cliente`");
                            $sentencia->execute();
                            $listaclientes=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                            //print_r($listaProductos);
                            ?>
                            <?php foreach($listaclientes as $cliente){?>
                                <option value="<?php echo $cliente['Id_Cliente'];?>"><?php echo $cliente['NombreCliente'];?><?php echo " con correo: "; echo $cliente['Correo'];?></option>
                            <?php } ?>
            </select>
            <label for="my-input">Modelo del auto</label>
            <input type="text" name="Modelo"id="Modelo" class="form-control" placeholder="Modelo del auto"></input>

            <label for="my-input">Matricula</label>
            <input type="text"  name="Matricula" id="Matricula" class="form-control" placeholder="Matricula"></input>

            <label for="my-input">Marca</label>
            <input type="text"  name="Marca" id="Marca" class="form-control" placeholder="Marca"></input>
            <br>
           <h2><label>TOTAL A PAGAR <?php echo "$ ";?> <?php echo number_format($total,2);?></label>

           <input type="hidden" name="total" id="total" value="<?php echo number_format($total,2);?>">
           <input type="hidden" name="HorasTotales" id="HorasTotales" value="<?php echo($HorasTotales)?>">
           <input type="hidden" name="HoraIni" id="HoraIni" value="<?php echo($hoy);?>">
           <input type="hidden" name="HoraFinal" id="HoraFinal" value="<?php echo ($TiempoFinal);?>">

           </h2>
            </div>
            <button value="Proceder" class="btn-btn-primary btn-lg btn-block" type="submit">PAGAR AHORA</button>
            </form>
            
    </td>
    </tr>

    </tbody>

</table>
<?php }else{?>
 <div class="alert alert-success" role="alert">
     No se han agregado ningun servicio
 </div>
<?php }?>
</div>

