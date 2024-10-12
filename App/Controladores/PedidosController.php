<?php

session_start();

    if ($_GET) {
        $BuscarPedido = $_GET['BuscarPedido'];
        $ListaPed = PedidosSQL::ListarPedidosUsuario($_SESSION['IdUsuario'],$BuscarPedido);

    }else {
        $ListaPed = PedidosSQL::ListarPedidosUsuario($_SESSION['IdUsuario']);
    }


?>