<?php
session_start();

if ($_SESSION['TipoId'] == "1") {
    $Aviso = null;
    if ($_GET) {
        $BuscarFacturaAdmin = $_GET['BuscarFacturaAdmin'];
        if (Comprobaciones::Vacios($BuscarFacturaAdmin)) {
            $ListaFacturaAdmin = FacturasSQL::ListarFacturas($BuscarFacturaAdmin);
        }else{
            $Aviso = "<script>Error: No se permiten campos vacios o HTML en en campo de busqueda</script> ";
            $ListaFacturaAdmin = FacturasSQL::ListarFacturas();
        }
        

    }else {
        $ListaFacturaAdmin = FacturasSQL::ListarFacturas();
    }
}else {
    header("Location: ../index.php");
}

?>