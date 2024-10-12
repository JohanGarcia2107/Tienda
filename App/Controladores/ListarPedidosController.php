<?php
session_start();

if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $BuscarPedidoAdmin = $_GET['BuscarPedidoAdmin'];
        $ListaPedAdmin = PedidosSQL::ListarPedidos($BuscarPedidoAdmin);

    }else {
        $ListaPedAdmin = PedidosSQL::ListarPedidos();
    }
}else {
    header("Location: ../index.php");
}

?>