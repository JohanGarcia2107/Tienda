<?php

session_start();

if ($_SESSION['TipoId'] == "1") {
    $IdUser = $_GET['IdUsuario'];
    $Usuario = UsuarioSQL::VistaUsuario($IdUser);
    $IdUser = $Usuario->GetIdUsuario();
    $Nombre = $Usuario->GetNombreUsuario();
    $Email = $Usuario->GetEmail();
    $Telefono = $Usuario->GetTelefono();
}else {
    header("Location: ../index.php");
}

?>