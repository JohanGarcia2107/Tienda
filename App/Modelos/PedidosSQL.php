<?php

class PedidosSQL {
    public static function InsertarPedido($IdFactura){
        $IdFactura=$IdFactura;
        $Fecha=Comprobaciones::FechaFutura();

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("INSERT INTO `pedidos` (`IdPedido`, `IdFactura`, `IdUser`, `MontoAPagar`, `Fecha`, `Direccion`, `Estado`) VALUES (NULL, :IdFactura, NULL, NULL, :Fecha, NULL, '1');");
            $sentencia->bindParam(':IdFactura', $IdFactura);
            $sentencia->bindParam(':Fecha', $Fecha);

            if ($sentencia->execute()) {
                $return=true;
            }else{
                $e=new PDOException;
                echo 'Error: ' . $e->getMessage();
                $return=false;
            }
            $sentencia=null;
            $Conexion=null;

        

            return $return;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function ActualizarPedido($Pedido){
        $IdPedido=$Pedido->GetIdPedido();
        $Fecha=$Pedido->GetFecha();
        $Direccion=$Pedido->GetDireccion();
        $IdEstado=$Pedido->GetIdEstado();

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `pedidos` SET `Fecha` = :Fecha, `Direccion` = :Direccion, `Estado` = :Estado WHERE `pedidos`.`IdPedido` = :IdPedido;");
            $sentencia->bindParam(':IdPedido', $IdPedido);
            $sentencia->bindParam(':Fecha', $Fecha);
            $sentencia->bindParam(':Direccion', $Direccion);
            $sentencia->bindParam(':Estado', $IdEstado);

            $sentencia->execute();
            $sentencia=null;
            $Conexion=null;

            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }

    public static function ListarPedidosUsuario($IdUsuario,$IdFactura=null){
        $IdUsuario=$IdUsuario;
        $IdFactura=$IdFactura;
        $ListaPedidos=array();
        try {

            $Conexion=Conexion::getConexion();

            if (!(isset($IdFactura))) {

                $sentencia = $Conexion->prepare("SELECT `pedidos`.`IdPedido`, `pedidos`.`IdFactura`, `usuarios`.`Nombre`, `pedidos`.`MontoAPagar`, `pedidos`.`Fecha`, `pedidos`.`Direccion`, `estadopedidos`.`NombreEstado` FROM `pedidos` JOIN `usuarios` ON `usuarios`.`IdUsuario` = `pedidos`.`IdUser` JOIN `estadopedidos` ON `estadopedidos`.`IdEstado` = `pedidos`.`Estado` WHERE `pedidos`.`IdUser` = :IdUsuario ORDER BY `pedidos`.`IdPedido` ASC;");
                $sentencia->bindParam(':IdUsuario', $IdUsuario);

            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Pedido=new Pedidos();
                    $Pedido->SetIdPedido($FilaActual['IdPedido']);
                    $Pedido->SetIdFactura($FilaActual['IdFactura']);
                    $Pedido->SetIdUsuario($FilaActual['Nombre']);
                    $Pedido->SetMontoAPagar($FilaActual['MontoAPagar']);
                    $Pedido->SetFecha($FilaActual['Fecha']);
                    $Pedido->SetDireccion($FilaActual['Direccion']);
                    $Pedido->SetIdEstado($FilaActual['NombreEstado']);
                    

                
                    array_push($ListaPedidos,$Pedido);
                }

            }else{

                $sentencia = $Conexion->prepare("SELECT `pedidos`.`IdPedido`, `pedidos`.`IdFactura`, `usuarios`.`Nombre`, `pedidos`.`MontoAPagar`, `pedidos`.`Fecha`, `pedidos`.`Direccion`, `estadopedidos`.`NombreEstado` FROM `pedidos` JOIN `usuarios` ON `usuarios`.`IdUsuario` = `pedidos`.`IdUser` JOIN `estadopedidos` ON `estadopedidos`.`IdEstado` = `pedidos`.`Estado` WHERE `pedidos`.`IdUser` = :IdUsuario AND `pedidos`.`IdFactura` = :IdFactura;");
                $sentencia->bindParam(':IdUsuario', $IdUsuario);
                $sentencia->bindParam(':IdFactura', $IdFactura);

            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Pedido=new Pedidos();
                    $Pedido->SetIdPedido($FilaActual['IdPedido']);
                    $Pedido->SetIdFactura($FilaActual['IdFactura']);
                    $Pedido->SetIdUsuario($FilaActual['Nombre']);
                    $Pedido->SetMontoAPagar($FilaActual['MontoAPagar']);
                    $Pedido->SetFecha($FilaActual['Fecha']);
                    $Pedido->SetDireccion($FilaActual['Direccion']);
                    $Pedido->SetIdEstado($FilaActual['NombreEstado']);
                    

                
                    array_push($ListaPedidos,$Pedido);
                }

            }
            

            $sentencia=null;
            $Conexion=null;

            return $ListaPedidos;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }
    }

    public static function ListarPedidos($Valor=null){
        $Valor=$Valor;
        $ListaPedidos=array();
        try {

            $Conexion=Conexion::getConexion();

            if (isset($Valor)) {
                if (ctype_digit($Valor)) {

                    $sentencia = $Conexion->prepare("SELECT `pedidos`.`IdPedido`, `pedidos`.`IdFactura`, `usuarios`.`Nombre`, `pedidos`.`MontoAPagar`, `pedidos`.`Fecha`, `pedidos`.`Direccion`, `estadopedidos`.`NombreEstado` FROM `pedidos` JOIN `usuarios` ON `usuarios`.`IdUsuario` = `pedidos`.`IdUser` JOIN `estadopedidos` ON `estadopedidos`.`IdEstado` = `pedidos`.`Estado` WHERE `pedidos`.`IdFactura` = :Valor ;");
                    $sentencia->bindParam(':Valor', $Valor);

            
                    $sentencia->execute();

                    $Fila=$sentencia->fetchAll();

                    foreach ($Fila as $FilaActual) {
                        $Pedido=new Pedidos();
                        $Pedido->SetIdPedido($FilaActual['IdPedido']);
                        $Pedido->SetIdFactura($FilaActual['IdFactura']);
                        $Pedido->SetIdUsuario($FilaActual['Nombre']);
                        $Pedido->SetMontoAPagar($FilaActual['MontoAPagar']);
                        $Pedido->SetFecha($FilaActual['Fecha']);
                        $Pedido->SetDireccion($FilaActual['Direccion']);
                        $Pedido->SetIdEstado($FilaActual['NombreEstado']);
                    

                
                        array_push($ListaPedidos,$Pedido);
                    }

                }else {
                    $Valor=strval($Valor);
                    $Valor="%".$Valor."%";

                    $sentencia = $Conexion->prepare("SELECT `pedidos`.`IdPedido`, `pedidos`.`IdFactura`, `usuarios`.`Nombre`, `pedidos`.`MontoAPagar`, `pedidos`.`Fecha`, `pedidos`.`Direccion`, `estadopedidos`.`NombreEstado` FROM `pedidos` JOIN `usuarios` ON `usuarios`.`IdUsuario` = `pedidos`.`IdUser` JOIN `estadopedidos` ON `estadopedidos`.`IdEstado` = `pedidos`.`Estado` WHERE `usuarios`.`Nombre` LIKE :Valor ORDER BY `pedidos`.`IdPedido` ASC;");
                    $sentencia->bindParam(':Valor', $Valor);

            
                    $sentencia->execute();

                    $Fila=$sentencia->fetchAll();

                    foreach ($Fila as $FilaActual) {
                        $Pedido=new Pedidos();
                        $Pedido->SetIdPedido($FilaActual['IdPedido']);
                        $Pedido->SetIdFactura($FilaActual['IdFactura']);
                        $Pedido->SetIdUsuario($FilaActual['Nombre']);
                        $Pedido->SetMontoAPagar($FilaActual['MontoAPagar']);
                        $Pedido->SetFecha($FilaActual['Fecha']);
                        $Pedido->SetDireccion($FilaActual['Direccion']);
                        $Pedido->SetIdEstado($FilaActual['NombreEstado']);
                    

                
                        array_push($ListaPedidos,$Pedido);
                    }
                }

            }else{

                $sentencia = $Conexion->prepare("SELECT `pedidos`.`IdPedido`, `pedidos`.`IdFactura`, `usuarios`.`Nombre`, `pedidos`.`MontoAPagar`, `pedidos`.`Fecha`, `pedidos`.`Direccion`, `estadopedidos`.`NombreEstado` FROM `pedidos` JOIN `usuarios` ON `usuarios`.`IdUsuario` = `pedidos`.`IdUser` JOIN `estadopedidos` ON `estadopedidos`.`IdEstado` = `pedidos`.`Estado` ORDER BY `pedidos`.`IdPedido` ASC;");

            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Pedido=new Pedidos();
                    $Pedido->SetIdPedido($FilaActual['IdPedido']);
                    $Pedido->SetIdFactura($FilaActual['IdFactura']);
                    $Pedido->SetIdUsuario($FilaActual['Nombre']);
                    $Pedido->SetMontoAPagar($FilaActual['MontoAPagar']);
                    $Pedido->SetFecha($FilaActual['Fecha']);
                    $Pedido->SetDireccion($FilaActual['Direccion']);
                    $Pedido->SetIdEstado($FilaActual['NombreEstado']);
                    

                
                    array_push($ListaPedidos,$Pedido);
                }

            }
            

            $sentencia=null;
            $Conexion=null;

            return $ListaPedidos;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }
    }

    public static function VistaPedido($IdPedido){
        $IdPedido=$IdPedido;
        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("SELECT `pedidos`.`IdPedido`, `pedidos`.`IdFactura`, `usuarios`.`Nombre`, `pedidos`.`MontoAPagar`, `pedidos`.`Fecha`, `pedidos`.`Direccion`, `estadopedidos`.`IdEstado` FROM `pedidos` JOIN `usuarios` ON `usuarios`.`IdUsuario` = `pedidos`.`IdUser` JOIN `estadopedidos` ON `estadopedidos`.`IdEstado` = `pedidos`.`Estado` WHERE `pedidos`.`IdPedido` = :IdPedido;");
            $sentencia->bindParam(':IdPedido', $IdPedido);
            
            $sentencia->execute();

            $Fila=$sentencia->fetch(PDO::FETCH_ASSOC);

            if($Fila){
                    $Pedido=new Pedidos();
                    $Pedido->SetIdPedido($Fila['IdPedido']);
                    $Pedido->SetIdFactura($Fila['IdFactura']);
                    $Pedido->SetIdUsuario($Fila['Nombre']);
                    $Pedido->SetMontoAPagar($Fila['MontoAPagar']);
                    $Pedido->SetFecha($Fila['Fecha']);
                    $Pedido->SetDireccion($Fila['Direccion']);
                    $Pedido->SetIdEstado($Fila['IdEstado']);

                return $Pedido;
            }else{
                return null;
            }


            $sentencia=null;
            $Conexion=null;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }
    }
}

//$Sirve=PedidosSQL::InsertarPedido('4'); Si sirve

/*$Pedido = new Pedidos(4,null,null,null,'2024-08-10',"AvenidaPrueba3",2);
print_r(PedidosSQL::ActualizarPedido($Pedido)); Si sirve*/

//print_r(PedidosSQL::ListarPedidosUsuario(3)); Si sirve

//print_r(PedidosSQL::ListarPedidos("au")); Si sirve

//print_r(PedidosSQL::VistaPedido(2)); Si sirve


?>