<?php
require_once("../BaseDatos/Conexion.php");
require_once("ClasesObj/Facturas.php");
require_once("PedidosSQL.php");

class FacturasSQL{

    public static function InsertarFactura($Factura){
        require("../FuncionesAparte/Comprobaciones.php");
        
        $Direccion=$Factura->GetDireccion();
        $MedioDePago=$Factura->GetMedioDePago();
        $Fecha=Comprobaciones::FechaActual();
        $IdUsuario=$Factura->GetIdUsuario();

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("INSERT INTO `factura` (`IdFactura`, `Direccion`, `MedioDePago`, `Fecha`, `TotalAPagar`, `IVA`, `PagoFinal`, `IdUsuario`) VALUES (NULL, :Direccion, :MedioDePago, :Fecha, NULL, '1.21', NULL, :IdUsuario);");
            $sentencia->bindParam(':Direccion', $Direccion);
            $sentencia->bindParam(':MedioDePago', $MedioDePago);
            $sentencia->bindParam(':Fecha', $Fecha);
            $sentencia->bindParam(':IdUsuario', $IdUsuario);

            $sentencia->execute();

            $idFactura = $Conexion->lastInsertId();
            $sentencia=null;
            $Conexion=null;

            PedidosSQL::InsertarPedido($idFactura);


            return $idFactura; 
            //Se manda al metodo de insertar pedido y al objeto deatalles para el metodo de insertar detalles en el orden en que escribi
            //Osea, primero Pedidos, y despues se hace los de los detalles, cada vez que se añada un detalle se actualizaran los campos vacios de
            //la factura, el pedido, y los propios campos vacios de los detalles :3
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }
    }

    public static function ListarFacturas($Valor=null){

        $ListaFacturas=array();
        $Valor1=$Valor;
        $Valor2=$Valor;
        if (isset($Valor2)) {
            $Valor2=strval($Valor2);
        }
        

        try {
            $Conexion=Conexion::getConexion();

            if ($Valor!=null) {

                $Valor2="%".$Valor2."%";
                $sentencia = $Conexion->prepare("SELECT `factura`.`IdFactura`,`factura`.`Direccion`,`factura`.`MedioDePago`,`factura`.`Fecha`,`factura`.`TotalAPagar`,`factura`.`IVA`,`factura`.`PagoFinal`,`usuarios`.`Nombre` FROM `factura` JOIN `usuarios` ON `factura`.`IdUsuario` = `usuarios`.`IdUsuario` WHERE `factura`.`IdUsuario` = :Valor1 OR `usuarios`.`Nombre` LIKE :Valor2 ORDER BY `factura`.`IdFactura` DESC;");
                $sentencia->bindParam(':Valor1', $Valor1);
                $sentencia->bindParam(':Valor2', $Valor2);

            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Factura= new Facturas();
                    $Factura->SetIdFactura($FilaActual['IdFactura']);
                    $Factura->SetDireccion($FilaActual['Direccion']);
                    $Factura->SetMedioDePago($FilaActual['MedioDePago']);
                    $Factura->SetFecha($FilaActual['Fecha']);
                    $Factura->SetTotalAPagar($FilaActual['TotalAPagar']);
                    $Factura->SetIVA($FilaActual['IVA']);
                    $Factura->SetTotalAPagarConIVA($FilaActual['PagoFinal']);
                    $Factura->SetIdUsuario($FilaActual['Nombre']);

                    array_push($ListaFacturas,$Factura);
                }

            }else {

                $sentencia = $Conexion->prepare("SELECT `factura`.`IdFactura`,`factura`.`Direccion`,`factura`.`MedioDePago`,`factura`.`Fecha`,`factura`.`TotalAPagar`,`factura`.`IVA`,`factura`.`PagoFinal`,`usuarios`.`Nombre` FROM `factura` JOIN `usuarios` ON `factura`.`IdUsuario` = `usuarios`.`IdUsuario` ORDER BY `factura`.`IdFactura` DESC;");
            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Factura= new Facturas();
                    $Factura->SetIdFactura($FilaActual['IdFactura']);
                    $Factura->SetDireccion($FilaActual['Direccion']);
                    $Factura->SetMedioDePago($FilaActual['MedioDePago']);
                    $Factura->SetFecha($FilaActual['Fecha']);
                    $Factura->SetTotalAPagar($FilaActual['TotalAPagar']);
                    $Factura->SetIVA($FilaActual['IVA']);
                    $Factura->SetTotalAPagarConIVA($FilaActual['PagoFinal']);
                    $Factura->SetIdUsuario($FilaActual['Nombre']);

                    array_push($ListaFacturas,$Factura);
                }
            }

            $sentencia=null;
            $Conexion=null;

            return $ListaFacturas;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }

    }
}

/*$Factura = new Facturas(null,"AvenidaPrueba","Prueba",null,null,null,3);
$IdFactura=FacturasSQL::InsertarFactura($Factura);
echo "<br>";
echo "<br>";
echo "Id de la factura: $IdFactura";Si sirve*/

/*$ListaFacturas=FacturasSQL::ListarFacturas();
print_r($ListaFacturas);Si sirve*/


?>