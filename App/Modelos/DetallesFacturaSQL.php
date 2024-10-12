<?php

class DetallesFacturaSQL{

    public static function InsertarDetalle($Detalle){
        $IdProducto=$Detalle->GetIdProducto();
        $Cantidad=$Detalle->GetCantidad();
        $IdFactura=$Detalle->GetIdFactura();

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("INSERT INTO `detallefactura` (`IdProducto`, `Precio`, `Cantidad`, `PrecioTotal`, `IdFactura`) VALUES (:IdProducto, '0', :Cantidad, '0', :IdFactura);");
            $sentencia->bindParam(':IdProducto', $IdProducto);
            $sentencia->bindParam(':Cantidad', $Cantidad);
            $sentencia->bindParam(':IdFactura', $IdFactura);

            $sentencia->execute();
            $sentencia=null;
            $Conexion=null;
        
            Comprobaciones::ActualizacionCampos($IdFactura);

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function ListarDetalleFacturas($IdFactura,$IdUser=null){

        $ListaDetalles=array();
        $IdFactura=$IdFactura;
        $IdUser=$IdUser;
        

        try {
            $Conexion=Conexion::getConexion();

            if ($IdUser==null) {

                $sentencia = $Conexion->prepare("SELECT `productos`.`Nombre`, `detallefactura`.`Precio`,`detallefactura`.`Cantidad`,`detallefactura`.`PrecioTotal`,`detallefactura`.`IdFactura` FROM `detallefactura` JOIN `productos` ON `productos`.`IdProducto` = `detallefactura`.`IdProducto` WHERE `detallefactura`.`IdFactura` = :IdFactura;");
                $sentencia->bindParam(':IdFactura', $IdFactura);

            }else {

                $sentencia = $Conexion->prepare("SELECT `productos`.`Nombre`, `detallefactura`.`Precio`, `detallefactura`.`Cantidad`, `detallefactura`.`PrecioTotal`, `detallefactura`.`IdFactura` FROM `detallefactura` JOIN `productos` ON `productos`.`IdProducto` = `detallefactura`.`IdProducto` JOIN `factura` ON `factura`.`IdFactura` = `detallefactura`.`IdFactura` WHERE `detallefactura`.`IdFactura` = :IdFactura AND `factura`.`IdUsuario` = :IdUsuario;");
                $sentencia->bindParam(':IdFactura', $IdFactura);
                $sentencia->bindParam(':IdUsuario', $IdUser);

            }

            

            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Detalle=new DetallesFacturas();
                    $Detalle->SetIdProducto($FilaActual['Nombre']);
                    $Detalle->SetPrecio($FilaActual['Precio']);
                    $Detalle->SetCantidad($FilaActual['Cantidad']);
                    $Detalle->SetPrecioTotal($FilaActual['PrecioTotal']);
                    $Detalle->SetIdFactura($FilaActual['IdFactura']);
                    

                
                    array_push($ListaDetalles,$Detalle);
                }

            $sentencia=null;
            $Conexion=null;

            return $ListaDetalles;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }

    }
}

/*$Detalle = new DetallesFacturas(3,null,3,null,4);
print_r(DetallesFacturaSQL::InsertarDetalle($Detalle)); Si sirve*/

//print_r(DetallesFacturaSQL::ListarFacturas(4)); Si sirve

?>