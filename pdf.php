<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once "ReportesLog.php";



if(isset($_POST['btnAccion'])){
    @$id=$_POST['id'];
    
    switch($_POST['btnAccion']){

        case 'clientes':
            $pdf=new Model();
            $lista=$pdf->getCliente();
            $html='<h1>Tabla de Clientes<h1>
                    <table>
                    <tr>
                    <td>ID de cliente<td><td>Nombre del cliente<td>
                    <td>Telefono</td><td></td>
                    <td>Correo</td><td></td><td>Direccion</td>
                    </tr>';
            foreach($lista['items'] as $item){
                $html.='<tr>
                        <td>'.$item['id'].'</td><td></td><td>' .$item['Nombre'].'</td><td></td>
                        <td>'.$item['Telefono'].'</td><td></td><td>' .$item['Correo'].'</td><td></td>
                        <td>'.$item['Direccion'].'</td><td></td>
                        </tr>';
                
            }
            $html.='</table>';
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        break;

        case 'ventas':
            $pdf=new Model();
            $lista=$pdf->getVentas();
            $html='<h1>Tabla de ventas<h1>
                    <table>
                    <tr>
                    <td>Folio<td><td>Id_Cliente<td>
                    <td>Modelo</td><td></td>
                    <td>matricula</td><td></td><td>Marca</td>
                    <td></td><td>Total</td>
                    
                    </tr>';
            foreach($lista['items'] as $item){
                $html.='<tr>
                        <td>'.$item['id_venta'].'</td><td></td><td>' .$item['Id_Cliente'].'</td><td></td>
                        <td>'.$item['Modelo'].'</td><td></td><td>' .$item['Matricula'].'</td><td></td>
                        <td>'.$item['Marca'].'</td><td></td><td>'.$item['Total'].'</td><td></td>
                        </tr>';
                
            }
            $html.='</table>';
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html);
            $mpdf->Output();

            break;

        case 'servicios':
            $pdf=new Model();
            $lista=$pdf->getServicios();
            var_dump($lista);
             $html='<h1>Tabla de servicios<h1>
                    <table>
                    <tr>
                    <td>ID<td><td>Nombre se servicio<td>
                    <td>Costo</td><td></td>
                    <td>Tiempo</td><td>
                    </tr>';
            foreach($lista['items'] as $item){
                $html.='<tr>
                        <td>'.$item['id_servicio'].'</td><td></td><td>' .$item['NombreServicio'].'</td><td></td>
                        <td>'.$item['Costo'].'</td><td></td><td>' .$item['Tiempo'].'</td><td></td>
                        
                        </tr>';
                
            }
            $html.='</table>';
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML($html);
            $mpdf->Output();
            break;



            case 'ticket':
                $pdf=new Model();
                $lista=$pdf->getTicket();
                var_dump($lista);
                 $html='<h1>Ticket de servicio<h1>
                        <table>
                        <tr>
                        <td>folio<td><td>Nombre<td>
                        <td>Modelo</td><td></td>
                        <td>Matricula</td><td>
                        </tr><td>Marca</td><td>
                        </tr><td>Total</td><td>
                        </tr>';
                foreach($lista['items'] as $item){
                    $html.='<tr>
                            <td>'.$item['folio'].'</td><td></td><td>' .$item['cliente'].'</td><td></td>
                            <td>'.$item['Modelo'].'</td><td></td><td>' .$item['Matricula'].'</td><td></td>
                            <td>'.$item['Marca'].'</td><td></td><td>' .$item['Total'].'</td><td></td>
                            
                            </tr>';
                    
                }
                $html.='</table>';
                $mpdf = new \Mpdf\Mpdf();
                $mpdf->WriteHTML($html);
                $mpdf->Output();
                break;
    }


}    

  /*  switch($caso){

        case 'clientes':
           
        break;

    }*/




?>