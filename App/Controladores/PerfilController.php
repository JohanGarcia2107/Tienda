<?php

session_start();

if ($_SESSION) {
    $IdUser = $_SESSION['IdUsuario'];
    $Usuario = UsuarioSQL::VistaUsuario($IdUser);
    if ($Usuario) {
        $IdUser = $Usuario->GetIdUsuario();
        $Nombre = $Usuario->GetNombreUsuario();
        $Email = $Usuario->GetEmail();
        $Telefono = $Usuario->GetTelefono();
    }else {
        header("Location: Error404.php");
    }
}else {
    header("Location: ../index.php");
}



?>