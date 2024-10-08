<?php

session_start();

if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $BuscarProdAdmin = $_GET['BuscarProductoAdmin'];
        $ListaProdAdmin = ProductosSQL::ListarProductos($BuscarProdAdmin);

        if (isset($_GET['DesActivarProd'])) {
            $IdProdAdmin = $_GET['DesActivarProd'];
            ProductosSQL::EliminarProducto($IdProdAdmin);
            header("Location: ListarProductos.php");
        }

        if (isset($_GET['ActivarProd'])) {
            $IdProdAdmin = $_GET['ActivarProd'];
            ProductosSQL::HabilitarProducto($IdProdAdmin);
            header("Location: ListarProductos.php");
        }

    }else {
        $ListaProdAdmin = ProductosSQL::ListarProductos();
    }
}else {
    header("Location: ../index.php");
}

?>