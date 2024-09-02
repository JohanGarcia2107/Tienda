<?php

session_start();

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
    }else {
        header("Location: Error404.php");
    }


?>