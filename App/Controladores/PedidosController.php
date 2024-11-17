<?php

session_start();

if ($_SESSION) {
    if ($_GET) {
        $BuscarPedido = $_GET['BuscarPedido'];
        if (Comprobaciones::Vacios($BuscarPedido)) {
            $ListaPed = PedidosSQL::ListarPedidosUsuario($_SESSION['IdUsuario'],$BuscarPedido);
        }else{
            $Aviso = "<script>Error: No se permiten campos vacios o HTML en en campo de busqueda</script> ";
            $ListaPed = PedidosSQL::ListarPedidosUsuario($_SESSION['IdUsuario']);
        }

    }else {
        $ListaPed = PedidosSQL::ListarPedidosUsuario($_SESSION['IdUsuario']);
    }
}else {
    header("Location: ../index.php");
}




?>