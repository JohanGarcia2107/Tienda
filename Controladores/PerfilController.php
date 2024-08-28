<?php

session_start();

if ($_SESSION) {
    $IdUser = $_SESSION['IdUsuario'];
    $Usuario = UsuarioSQL::VistaUsuario($IdUser);
    $IdUser = $Usuario->GetIdUsuario();
    $Nombre = $Usuario->GetNombreUsuario();
    $Email = $Usuario->GetEmail();
    $Telefono = $Usuario->GetTelefono();
}else {
    header("Location: ../index.php");
}



?>