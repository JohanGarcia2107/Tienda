<?php
session_start();

if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $BuscarPedidoAdmin = $_GET['BuscarPedidoAdmin'];
        if (Comprobaciones::Vacios($BuscarPedidoAdmin)) {
            $ListaPedAdmin = PedidosSQL::ListarPedidos($BuscarPedidoAdmin);
        }else{
            $Aviso = "<script>Error: No se permiten campos vacios o HTML en en campo de busqueda</script> ";
            $ListaPedAdmin = PedidosSQL::ListarPedidos();
        }
    }else {
        $ListaPedAdmin = PedidosSQL::ListarPedidos();
    }
}else {
    header("Location: ../index.php");
}

?>