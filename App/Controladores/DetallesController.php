<?php

session_start();

if ($_SESSION) {
    if ($_GET) {
        if ($_SESSION['TipoId'] == "1") {
            $IdFactura = $_GET['Factura'];
            $ListaDetalles = null;
            if (Comprobaciones::Vacios($IdFactura)) {
                $ListaDetalles = DetallesFacturaSQL::ListarDetalleFacturas($IdFactura);
            }
            if ($ListaDetalles==null) {
                header("Location: Error404.php");
            }
        }else {
                $IdFactura = $_GET['Factura'];
                $IdUser = $_SESSION['IdUsuario'];
                $ListaDetalles = null;
                if (Comprobaciones::Vacios($IdFactura)) {
                    $ListaDetalles = DetallesFacturaSQL::ListarDetalleFacturas($IdFactura,$IdUser);
                if ($ListaDetalles==null) {
                    header("Location: Error404.php");
                }
            }
        }
    }else{
        header("Location: Error404.php");
    }
}else{
    header("Location: Error404.php");
}



?>