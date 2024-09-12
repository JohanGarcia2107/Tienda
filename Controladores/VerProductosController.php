<?php

session_start();
    $ProductoEnCarrito=false;
    $IProd = $_GET['IdProd'];
    $Producto = ProductosSQL::VistaProducto($IProd);
    if ($Producto) {
        $IdProd = $Producto->GetIdProducto();
        $NombreProd = $Producto->GetNombreProducto();
        $Img = $Producto->GetDirIMGProd();
        $Descripcion = $Producto->GetDescripcion();
        $Precio = $Producto->GetPrecio();
        $Stock = $Producto->GetStock();
        $Actividad = $Producto->GetActividadId();
        if (isset($_SESSION['CarritoDeComprar'])) {
            foreach ($_SESSION['CarritoDeComprar'] as $ProductoCarrito) {
                $IdProdCarrito = $ProductoCarrito->GetIdProducto();
                if ($IdProdCarrito==$IdProd) {
                    $ProductoEnCarrito=true;
                }
            }
            //echo $ProductoEnCarrito?"true":"false";
            //print_r($_SESSION['CarritoDeComprar']);
        }
    }else {
        header('location:Error404.php');
    }


?>