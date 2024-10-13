<?php

session_start();

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
    }else {
        header("Location: Error404.php");
    }
}else {
    header("Location: ../index.php");
}



?>