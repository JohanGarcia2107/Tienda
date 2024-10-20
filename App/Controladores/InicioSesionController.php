<?php
session_start();

$Salida = null;
$Salida2 = null;
if ($_SESSION) {
    header('location:../index.php');
}
if ($_POST!=null) {
    $Correo = $_POST['MailInicioSesion'];
    $Contrasena = hash('ripemd160', $_POST['ContrasenaInicioSesion']);
    $Usuario = UsuarioSQL::InicioSesion($Correo, $Contrasena);
    if ($Usuario == "Usuario inexistente") {
        $Salida = "<script> alert('Error en la contraseña o correo')</script>";
        $Salida2 = "<p> Error en la contraseña o correo </p>";
    }elseif ($Usuario == null){
        $Salida = "<script> alert('Error al iniciar sesión')</script>";
        $Salida2 = "<p> Error al iniciar sesión </p>";
    }else {
        $IdUser = $Usuario->GetIdUsuario();
        $NombreUsuario = $Usuario->GetNombreUsuario();
        $TipoId = $Usuario->GetTipoId();
        $Mail = $Usuario->GetEmail();
        $ActividadId = $Usuario->GetActividadId();
        if ($ActividadId=="2") {
            $Salida = "<script> alert('Su cuenta esta inactiva, contactese con la empresa para reactivarla')</script>";
            $Salida2 = "<p> Su cuenta esta inactiva, contactese con la empresa para reactivarla </p>";
        }elseif ($ActividadId=="1") {
            session_start();
            $_SESSION['IdUsuario'] = $IdUser;
            $_SESSION['NombreUsuario'] = $NombreUsuario;
            $_SESSION['Mail'] = $Mail;
            $_SESSION['TipoId'] = $TipoId;
            header("Location: Perfil.php");
        }
    }

    }

?>