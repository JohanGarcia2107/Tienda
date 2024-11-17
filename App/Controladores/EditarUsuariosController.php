<?php

if ($_SESSION) {
    $Salida = null;
    $Salida2 = null;

        if ($_POST) {
            $IdUser = $_GET['IdUsuario'];
            $NombreUsusario = $_POST['EditarUsuarioNombre'];
            $Telefono = $_POST['EditarUsuarioTelefono'];
                if (Comprobaciones::Vacios($NombreUsusario) && Comprobaciones::Vacios($Telefono)) {
                            $Usuario = new Usuarios($IdUser,$NombreUsusario,null, $Telefono);
                            $ConfirmacionRegistro = UsuarioSQL::ActualizaUsuario($Usuario);
                            if ($ConfirmacionRegistro=="Actualizado Correctamente") {
                                echo "<script> alert('Actualizado Correctamente')</script>";
                                echo "<p> Actualizado Correctamente</p>";
                                echo "<script> window.location.href='ListarUsuarios.php?BuscarUser=$IdUser';</script>";
                            }else {
                                $Salida ="<script> alert('Actualizacion fallida, Correo ya registrado o datos faltantes')</script>";
                                $Salida2 = "<p> Actualizacion fallida, Correo ya registrado o datos faltantes </p>";
                            }
                    
                }else {
                    $Salida3 ="<script> alert('No pueden haber campos vacios')</script>";
                    $Salida4 = "<p> No pueden haber campos vacios </p>";
                }
        }
}else {
    header("Location: ../index.php");
}



?>