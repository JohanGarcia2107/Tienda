<?php

session_start();

if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $BuscarUser = $_GET['BuscarUser'];
        $ListaUsers = UsuarioSQL::ListarUsuarios($BuscarUser);

        if (isset($_GET['DesActivar'])) {
            $id = $_GET['DesActivar'];
            UsuarioSQL::EliminarUsuario($id);
            header("Location: ListarUsuarios.php");
        }

        if (isset($_GET['Activar'])) {
            $id = $_GET['Activar'];
            UsuarioSQL::HabilitarUsuario($id);
            header("Location: ListarUsuarios.php");
        }

    }else {
        $ListaUsers = UsuarioSQL::ListarUsuarios();
    }
}else {
    header("Location: ../index.php");
}

?>