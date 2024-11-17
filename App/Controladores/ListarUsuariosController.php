<?php

session_start();

if ($_SESSION['TipoId'] == "1") {
    if ($_GET) {
        $BuscarUser = $_GET['BuscarUser'];
        if (Comprobaciones::Vacios($BuscarUser)) {
            $ListaUsers = UsuarioSQL::ListarUsuarios($BuscarUser);
        }else{
            $ListaUsers = UsuarioSQL::ListarUsuarios();
        }
        

        if (isset($_GET['DesActivar'])) {
            $id = $_GET['DesActivar'];
            if(Comprobaciones::Vacios($id)){
                UsuarioSQL::EliminarUsuario($id);
            }
            header("Location: ListarUsuarios.php");
        }

        if (isset($_GET['Activar'])) {
            $id = $_GET['Activar'];
            if(Comprobaciones::Vacios($id)){
                UsuarioSQL::HabilitarUsuario($id);
            }
            header("Location: ListarUsuarios.php");
        }

    }else {
        $ListaUsers = UsuarioSQL::ListarUsuarios();
    }
}else {
    header("Location: ../index.php");
}

?>