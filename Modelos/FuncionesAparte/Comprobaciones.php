<?php

class Comprobaciones{
    public static function FechaActual(){
        date_default_timezone_set('America/Bogota');

        $FechaActual=date("Y-m-d");
        
        return $FechaActual;
    }

    public static function FechaFutura(){
        $FechaActual = Comprobaciones::FechaActual();

        $FechaFutura = strtotime('+15 day', strtotime($FechaActual)); 
        $FechaFutura = date('Y-m-d', $FechaFutura);

        return $FechaFutura;
    }

    public static function Vacios ($Input){
        $cadenaLimpia = trim($Input);
        // Verifica si la cadena resultante está vacía
        return !(empty($cadenaLimpia));
    }

    public static function ActualizacionCamposVacios($IdFactura){
        $IdFactura=$IdFactura;
        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `DetalleFactura` SET `DetalleFactura`.`Precio` = (SELECT `Precio` FROM `Productos` WHERE `DetalleFactura`.`IdProducto` = `IdProducto`) WHERE `DetalleFactura`.`IdFactura`= :IdFactura;");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->execute();

            $sentencia = $Conexion->prepare("UPDATE `DetalleFactura` SET `DetalleFactura`.`PrecioTotal` = (`Precio`*`Cantidad`) WHERE `DetalleFactura`.`IdFactura`= :IdFactura;");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->execute();

            $sentencia = $Conexion->prepare("UPDATE `Factura` SET `Factura`.`TotalAPagar` = (SELECT sum(`Preciototal`) `PrecioTotal` FROM `DetalleFactura` WHERE `Factura`.`IdFactura` = `IdFactura`) WHERE `Factura`.`IdFactura`= :IdFactura;");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->execute();

            $sentencia = $Conexion->prepare("UPDATE `Factura` SET `Factura`.`PagoFinal` = `Factura`.`TotalAPagar`*`IVA` WHERE `Factura`.`IdFactura`= :IdFactura;");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->execute();

            $sentencia = $Conexion->prepare("UPDATE `Pedidos` SET `IdUser` = (SELECT `IdUsuario` FROM `Factura` WHERE `IdFactura` = `Pedidos`.`IdFactura`) WHERE `Pedidos`.`IdFactura`= :IdFactura;");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->execute();

            $sentencia = $Conexion->prepare("UPDATE `Pedidos` SET `MontoAPagar` = (SELECT `PagoFinal` FROM `Factura` WHERE `IdFactura` = `Pedidos`.`IdFactura`) WHERE `Pedidos`.`IdFactura`= :IdFactura;");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->execute();

            $sentencia = $Conexion->prepare("UPDATE `Pedidos` SET `Direccion` = (SELECT `Direccion` FROM `Factura` WHERE `IdFactura` = `Pedidos`.`IdFactura`) WHERE `Pedidos`.`IdFactura`= :IdFactura;");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->execute();

            $sentencia=null;
            $Conexion=null;

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
}

//Comprobaciones::ActualizacionCamposVacios(6); Si sirve


?>