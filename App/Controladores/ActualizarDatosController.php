<?php

if ($_SESSION) {
    $Salida = null;
    $Salida2 = null;

        if ($_POST) {
            $IdUser = $_SESSION['IdUsuario'];
            $NombreUsusario = $_SESSION['NombreUsuario'];
            $Telefono = $_POST['ActualizarTelefono'];
            $Contrasena = $_POST['ActualizarContraseña'];
            $Contrasena2 = $_POST['ActualizarContraseña2'];
                if (Comprobaciones::Vacios($NombreUsusario) && Comprobaciones::Vacios($Telefono) && (Comprobaciones::Vacios($Contrasena)) && (Comprobaciones::Vacios($Contrasena2))) {
                        if ($Contrasena==$Contrasena2) {
                            $Usuario = new Usuarios($IdUser,$NombreUsusario, null, $Telefono, $Contrasena);
                            $ConfirmacionRegistro = UsuarioSQL::ActualizaUsuario($Usuario);
                            if ($ConfirmacionRegistro=="Actualizado Correctamente") {
                                echo "<script> alert('Actualizado Correctamente')</script>";
                                echo "<p> Actualizado Correctamente</p>";
                                echo "<script> window.location.href='perfil.php';</script>";
                            }else {
                                $Salida ="<script> alert('Actualizacion fallida, Correo ya registrado o datos faltantes')</script>";
                                $Salida2 = "<p> Actualizacion fallida, Correo ya registrado o datos faltantes </p>";
                            }
                        }else {
                            $Salida ="<script> alert('La confirmacion de la contraseña es diferente de la contraseña ingresada')</script>";
                            $Salida2 = "<p> La confirmacion de la contraseña es diferente de la contraseña ingresada </p>";
                        }
                }else {
                    $Salida ="<script> alert('No pueden haber campos vacios')</script>";
                    $Salida2 = "<p> No pueden haber campos vacios </p>";
                }
        }

}else {
    header("Location: ../index.php");
}



?>