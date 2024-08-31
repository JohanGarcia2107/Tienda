<?php

session_start();

$Salida = null;
$Salida2 = null;

if ($_SESSION['TipoId']  != "1") {
    header("Location: ../index.php");
}



if ($_POST) {
    $Fecha = new DateTime();
    $NombreProducto=$_POST['InsertarProductoNombre'];
    $Imagen= $Fecha->getTimestamp()."_".basename($_FILES['InsertarProductoImagen']['name']);
    $ImagenTipoDeArchivo = strtolower(pathinfo("Imagen", PATHINFO_EXTENSION));
    $Check = getimagesize($_FILES["InsertarProductoImagen"]["tmp_name"]);
    $Descripcion=$_POST['InsertarProductoDescripcion'];
    $Precio=$_POST['InsertarProductoPrecio'];
    $Stock=$_POST['InsertarProductoStock'];
    $Categoria=$_POST['InsertarProductoCategoria'];
    if (Comprobaciones::Vacios($NombreProducto) && (Comprobaciones::Vacios($Descripcion)) && Comprobaciones::Vacios($Precio) && (Comprobaciones::Vacios($Stock))) {
        if ($Check!==false) {
            if ($_FILES["fileToUpload"]["size"] < 10240000) {
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
                    
                    $Producto = new Productos(null, $NombreProducto, $Imagen, $Descripcion, $Precio, $Stock, $Categoria);
                    $RegistroExitoso = ProductosSQL::InsertarProducto($Producto);
                    if ($RegistroExitoso) {
                        if(move_uploaded_file($_FILES["InsertarProductoImagen"]["tmp_name"], "IMGs/".$Imagen)){
                            echo "<script> alert('Producto agregado con exito')</script>";
                            echo "<script> window.location.href='InsertarProducto.php';</script>";
                        }else {
                            echo "<script> alert('Producto agregado con exito pero no se pudo cargar la imagen')</script>";
                            echo "<script> window.location.href='InsertarProducto.php';</script>";
                        }
                    }
                }else {
                    $Salida = "<script> alert('Error: Solo se permiten archivos de tipo JPG, JPEG, PNG o GIF') </script>";
                    $Salida2 = "<p> Error: Solo se permiten archivos de tipo JPG, JPEG, PNG o GIF </p>";
                }
            }else {
                    $Salida = "<script>  alert(' El archivo es demasiado grande, el tamaño maximo es de 10 megabytes ') </script>";
                    $Salida2 = "<p> El archivo es demasiado grande, el tamaño maximo es de 20 megabytes </p>";
            }
        }else{
            $Salida = "<script>  alert(' El archivo debe ser una imagen ') </script>";
            $Salida2 = "<p> El archivo debe ser una imagen </p>";
        }
    }else {
        $Salida ="<script> alert('No pueden haber campos vacios')</script>";
            $Salida2 = "<p> No pueden haber campos vacios </p>";
    }
    
}



?>