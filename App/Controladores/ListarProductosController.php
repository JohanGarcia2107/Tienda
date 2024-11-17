<?php

session_start();

if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $BuscarProdAdmin = $_GET['BuscarProductoAdmin'];
        if (Comprobaciones::Vacios($BuscarProdAdmin)) {
            $ListaProdAdmin = ProductosSQL::ListarProductos($BuscarProdAdmin);
        }else{
            $ListaProdAdmin = ProductosSQL::ListarProductos();
        }
        

        if (isset($_GET['DesActivarProd'])) {
            $IdProdAdmin = $_GET['DesActivarProd'];
            if(Comprobaciones::Vacios($IdProdAdmin)){
                ProductosSQL::EliminarProducto($IdProdAdmin);
            }
            header("Location: ListarProductos.php");
        }

        if (isset($_GET['ActivarProd'])) {
            $IdProdAdmin = $_GET['ActivarProd'];
            if(Comprobaciones::Vacios($IdProdAdmin)){
                ProductosSQL::HabilitarProducto($IdProdAdmin);
            }
            header("Location: ListarProductos.php");
        }

    }else {
        $ListaProdAdmin = ProductosSQL::ListarProductos();
    }
}else {
    header("Location: ../index.php");
}

?>