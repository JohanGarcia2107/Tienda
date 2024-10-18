<?php

session_start();


if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $IdPedido =$_GET['Pedido'];
        $Pedido = PedidosSQL::VistaPedido($IdPedido);
        if ($Pedido) {
            $IdPedido = $Pedido->GetIdPedido();
            $IdFactura = $Pedido->GetIdFactura();
            $Nombre = $Pedido->GetIdUsuario();
            $MontoAPagar = $Pedido->GetMontoAPagar();
            $Fecha = $Pedido->GetFecha();
            $Direccion = $Pedido->GetDireccion();
            $Estado = $Pedido->GetIdEstado();

            $Salida = null;
            $Salida2 = null;

        if ($_POST) {
            $IdPedido = $_GET['Pedido'];
            $FechaPuesta = $Fecha;
            $FechaPaPoner = $_POST['Fecha'];
            $Direccion = $_POST['Direccion'];
            $Estado = $_POST['Estado'];
                if (Comprobaciones::Vacios($Fecha) && Comprobaciones::Vacios($Direccion) && (Comprobaciones::Vacios($Estado)) && (Comprobaciones::ComprobarFecha($FechaPuesta,$FechaPaPoner))) {
                            $Pedido = new Pedidos($IdPedido,null,null,null,$FechaPaPoner,$Direccion,$Estado);
                            $ConfirmacionActuRegistro = PedidosSQL::ActualizarPedido($Pedido);
                            if ($ConfirmacionActuRegistro=="Actualizado Correctamente") {
                                echo "<script> alert('Actualizado Correctamente')</script>";
                                echo "<p> Actualizado Correctamente</p>";
                                echo "<script> window.location.href='EditarPedido.php?Pedido=$IdPedido';</script>";
                            }else {
                                $Salida = "<script> alert('Actualizacion fallida, Estado no valido o datos faltantes')</script>";
                                $Salida2 = "<p> Actualizacion fallida, Estado no valido o datos faltantes </p>";
                            }
                }else {
                    $Salida = "<script> alert('No pueden haber campos vacios y la fecha debe de ser mayor o igual a la que esta puesta')</script>";
                    $Salida2 = "<p> No pueden haber campos vacios y la fecha debe de ser mayor o igual a la que esta puesta </p>";
                }
        }

        }else {
            header("Location: Error404.php");
        }
    }else {
        header("Location: ../index.php");
    }
}else {
    header("Location: ../index.php");
}





?>