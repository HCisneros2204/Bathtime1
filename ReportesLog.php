<?php
include_once 'ConReport.php';

class Model extends Database {

    function getCliente(){
     
        $clientes=array();
        $clientes['items']=array();
        $query=$this->connect()->query('SELECT * FROM cliente');

        while($row = $query->fetch()){
            array_push($clientes['items'],array( 
                'id'=>$row['Id_Cliente'],
                'Nombre'=>$row['NombreCliente'],
                'Telefono'=>$row['Telefono'],
                'Correo'=>$row['Correo'],
                'Direccion'=>$row['Direccion']
            ));
        }
        return $clientes;
         
    }

    function getVentas(){
     
        $ventas=array();
        $ventas['items']=array();
        $query=$this->connect()->query('SELECT * FROM rtblventa');

        while($row = $query->fetch()){
            array_push($ventas['items'],array( 
                'id_venta'=>$row['ID'],
                'Id_Cliente'=>$row['Id_Cliente'],
                'Modelo'=>$row['Modelo'],
                'Matricula'=>$row['Matricula'],
                'Marca'=>$row['Marca'],
                'Total'=>$row['Total']
            ));
        }
        return $ventas;
         
    }

    function getServicios(){
     
        $servicios=array();
        $servicios['items']=array();
        $query=$this->connect()->query('SELECT * FROM catalogoservicios');

        while($row = $query->fetch()){
            array_push($servicios['items'],array( 
                'id_servicio'=>$row['Id_servicio'],
                'NombreServicio'=>$row['NombreServicio'],
                'Costo'=>$row['Costo'],
                'Tiempo'=>$row['Tiempo']
                
            ));
        }
        return $servicios;
         
    }

    function getTicket(){
     
        $ticket=array();
        $id=$_POST['idT'];
        $ticket['items']=array();
        $query=$this->connect()->query("SELECT T.ID, T.Id_Cliente as IDu, C.NombreCliente as cliente,
        T.Modelo,T.Marca,T.Matricula,T.Total 
        FROM `tblventas` T 
        INNER JOIN `cliente` C ON T.Id_Cliente=C.Id_Cliente WHERE T.ID='$id'");

        


        while($row = $query->fetch()){
            array_push($ticket['items'],array( 
                'folio'=>$row['ID'],
                'cliente'=>$row['cliente'],
                'Modelo'=>$row['Modelo'],
                'Matricula'=>$row['Matricula'],
                'Marca'=>$row['Marca'],
                'Total'=>$row['Total']
                
            ));
        }
        return $ticket;
         
    }

    
    
}

?>