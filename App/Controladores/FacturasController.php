<?php

session_start();

if ($_SESSION) {
        $UsuarioId = $_SESSION['IdUsuario'];
        $ListaFactura = FacturasSQL::ListarFacturas($UsuarioId);
}else {
    header("Location: ../index.php");
}




?>