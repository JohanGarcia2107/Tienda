<?php

if ($_SESSION) {
    $Salida = null;
    $Salida2 = null;
    $Salida3 = null;
    $Salida4 = null;

        if ($_POST) {
                if (isset($_POST['ActualizarNombre']) || isset($_POST['ActualizarTelefono'])) {
                    $IdUser = $_SESSION['IdUsuario'];
                    $NombreUsusario = $_POST['ActualizarNombre'];
                    $Telefono = $_POST['ActualizarTelefono'];
                        if (Comprobaciones::Vacios($NombreUsusario) && Comprobaciones::Vacios($Telefono) ) {
                                $Usuario = new Usuarios($IdUser,$NombreUsusario, null, $Telefono);
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
                            $Salida ="<script> alert('No pueden haber campos vacios')</script>";
                            $Salida2 = "<p> No pueden haber campos vacios </p>";
                        }
                }
            
                if (isset($_POST['ContrasenaNueva']) || isset($_POST['ContrasenaNueva2']) || isset($_POST['ContrasenaActual'])) {
                    $IdUser = $_SESSION['IdUsuario'];
                    $Contrasena = $_POST['ContrasenaActual'];
                    $ContrasenaNueva = $_POST['ContrasenaNueva'];
                    $ContrasenaNueva2 = $_POST['ContrasenaNueva2'];
                        if (Comprobaciones::Vacios($Contrasena) && Comprobaciones::Vacios($ContrasenaNueva) && (Comprobaciones::Vacios($ContrasenaNueva2))) {
                                if ($ContrasenaNueva==$ContrasenaNueva2) {
                                    if (strlen($ContrasenaNueva>=8)) {
                                        $Contrasena = hash('ripemd160', $_POST['ContrasenaActual']);
                                        $ContrasenaNueva = hash('ripemd160', $_POST['ContrasenaNueva']);
                                        $Usuario = new Usuarios($IdUser,null, null, null, $Contrasena);
                                        $ConfirmacionActuC = UsuarioSQL::ActualizarContrasena($Usuario, $ContrasenaNueva);
                                        if ($ConfirmacionActuC==true) {
                                            echo "<script> alert('Contraseña actualizado Correctamente')</script>";
                                            echo "<p> Contraseña actualizado Correctamente</p>";
                                            echo "<script> window.location.href='perfil.php';</script>";
                                        }else {
                                            $Salida3 ="<script> alert('Actualizacion fallida, la contraseña actual no coincide con la que tenemos registrada')</script>";
                                            $Salida4 = "<p> Actualizacion fallida, la contraseña actual no coincide con la que tenemos registrada </p>";
                                        }
                                    }else {
                                        $Salida3 ="<scrip> alert('La contraseña debe tener al menos 8 caracteres</script>";
                                        $Salida4 ="<p> alert('La contraseña debe tener al menos 8 caracteres</p>";

                                    }
                            }else {
                                $Salida3 ="<script> alert('Las contraseñas nuevas no coinciden')</scrip>";
                                $Salida4 = "<p> Las contraseñas nuevas no coinciden </p>";
                            }
                        }else {
                            $Salida3 ="<script> alert('No pueden haber campos vacios')</script>";
                            $Salida4 = "<p> No pueden haber campos vacios </p>";
                        }
                }
        }

}else {
    header("Location: ../index.php");
}



?>