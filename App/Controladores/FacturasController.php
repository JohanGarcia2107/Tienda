<?php

session_start();

if ($_SESSION) {
        $UsuarioId = $_SESSION['IdUsuario'];
        $ListaFactura = FacturasSQL::ListarFacturasUser($UsuarioId);
}else {
    header("Location: ../index.php");
}




?>