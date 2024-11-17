<?php

session_start();


    if ($_GET) {
        $BuscarProdUser = $_GET['BuscarProducto'];
        if (Comprobaciones::Vacios($BuscarProdUser)) {
            $ListaProdUser = ProductosSQL::ListarProductosUser($BuscarProdUser);
        }else{
            $ListaProdUser = ProductosSQL::ListarProductosUser();
        }

    }else {
        $ListaProdUser = ProductosSQL::ListarProductosUser();
    }


?>