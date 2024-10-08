<?php

$Salida = null;
$Salida2 = null;

if ($_SESSION['TipoId']  != "1") {
    header("Location: ../index.php");
}



if ($_POST) {
    if ($_FILES['EditarIdImagenProd']['size'] == 0) {
        $id = $_GET['IdProd'];
        $NombreProducto=$_POST['EditarIdNombreProd'];
        $Imagen= $Img;
        $Descripcion=$_POST['EditarIdDescripcionProd'];
        $Precio=$_POST['EditarIdPrecioProd'];
        $Stock=$_POST['EditarIdStock'];
        if (Comprobaciones::Vacios($NombreProducto) && (Comprobaciones::Vacios($Descripcion)) && Comprobaciones::Vacios($Precio) && (Comprobaciones::Vacios($Stock))) {        
                    $Producto = new Productos($id, $NombreProducto, $Imagen, $Descripcion, $Precio, $Stock);
                    $ActualizacionExitosa = ProductosSQL::ActualizarProducto($Producto);
                    if ($ActualizacionExitosa) {
                        echo "<script> alert('Producto Actualizado con exito')</script>";
                        echo "<script> window.location.href='ListarProductos.php';</script>";
                    }
        }else {
            $Salida ="<script> alert('No pueden haber campos vacios')</script>";
            $Salida2 = "<p> No pueden haber campos vacios </p>";
        }
    }else {
        $id = $_GET['IdProd'];;
        $Fecha = new DateTime();
        $NombreProducto=$_POST['EditarIdNombreProd'];
        $ImagenVieja = $Img;
        $Imagen= $Fecha->getTimestamp()."_".basename($_FILES['EditarIdImagenProd']['name']);
        $ImagenTipoDeArchivo = strtolower(pathinfo("Imagen", PATHINFO_EXTENSION));
        $Check = getimagesize($_FILES["EditarIdImagenProd"]["tmp_name"]);
        $Descripcion=$_POST['EditarIdDescripcionProd'];
        $Precio=$_POST['EditarIdPrecioProd'];
        $Stock=$_POST['EditarIdStock'];
    if (Comprobaciones::Vacios($NombreProducto) && (Comprobaciones::Vacios($Descripcion)) && Comprobaciones::Vacios($Precio) && (Comprobaciones::Vacios($Stock))) {
        if ($Check!==false) {
            if ($_FILES["fileToUpload"]["size"] < 10240000) {
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
                    
                    $Producto = new Productos($id, $NombreProducto, $Imagen, $Descripcion, $Precio, $Stock);
                    $ActualizacionExitosa = ProductosSQL::ActualizarProducto($Producto);
                    if ($ActualizacionExitosa) {
                        if(move_uploaded_file($_FILES["EditarIdImagenProd"]["tmp_name"], "IMGs/".$Imagen)){
                            if ($ImagenVieja  !== null) {
                                unlink("IMGs/".$ImagenVieja);
                            }
                            echo "<script> alert('Producto Actualizado con exito')</script>";
                            echo "<script> window.location.href='ListarProductos.php';</script>";
                        }else {
                            if ($ImagenVieja  !== null) {
                                unlink("IMGs/".$ImagenVieja);
                            }
                            echo "<script> alert('Producto Actualizado con exito pero no se pudo cargar la imagen')</script>";
                            echo "<script> window.location.href='ListarProductos.php';</script>";
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
    
    
}



?>