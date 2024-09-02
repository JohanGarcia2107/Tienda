<?php

session_start();


    if ($_GET) {
        $BuscarProdUser = $_GET['BuscarProducto'];
        $ListaProdUser = ProductosSQL::ListarProductosUser($BuscarProdUser);

    }else {
        $ListaProdUser = ProductosSQL::ListarProductosUser();
    }


?>