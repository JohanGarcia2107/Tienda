<?php
session_start();

if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $BuscarFacturaAdmin = $_GET['BuscarFacturaAdmin'];
        $ListaFacturaAdmin = FacturasSQL::ListarFacturas($BuscarFacturaAdmin);

    }else {
        $ListaFacturaAdmin = FacturasSQL::ListarFacturas();
    }
}else {
    header("Location: ../index.php");
}

?>