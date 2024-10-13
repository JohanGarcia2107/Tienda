<?php

session_start();

if ($_SESSION) {
    if ($_GET) {
        $BuscarPedido = $_GET['BuscarPedido'];
        $ListaPed = PedidosSQL::ListarPedidosUsuario($_SESSION['IdUsuario'],$BuscarPedido);

    }else {
        $ListaPed = PedidosSQL::ListarPedidosUsuario($_SESSION['IdUsuario']);
    }
}else {
    header("Location: ../index.php");
}




?>