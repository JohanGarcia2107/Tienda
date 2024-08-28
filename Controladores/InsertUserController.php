<?php

session_start();

$Salida = null;
$Salida2 = null;

if ($_SESSION['TipoId']  != "1") {
        header("Location: ../index.php");
    }

if ($_POST!=null) {
    $NombreUsusario=$_POST['InsertarUsuarioNombre'];
    $Email=$_POST['InsertarUsuarioEmail'];
    $Telefono=$_POST['InsertarUsuarioTelefono'];
    $TipoId=$_POST['InsertarUsuarioTipodeUsuario'];
    $Contrasena=$_POST['InsertarUsuarioContraseña'];
    $Contrasena2=$_POST['InsertarUsuarioContraseña2'];
    if(ComprobarMail::VerificarSiMailExiste($Email)){
        if ($Contrasena==$Contrasena2) {
            $Usuario = new Usuarios(null,$NombreUsusario, $Email, $Telefono, $Contrasena, $TipoId);
            $ConfirmacionRegistro = UsuarioSQL::InsertarUsuario($Usuario);
            if ($ConfirmacionRegistro=="Registro Exitoso") {
                $Salida = "<script> alert('Registro exitoso, ya puedes iniciar sesión')</script>";
                $Salida2 = "<p> Registro exitoso, ya puedes iniciar sesión </p>";
            }else {
                $Salida ="<script> alert('Registro fallido, Correo ya registrado o datos faltantes')</script>";
                $Salida2 = "<p> Registro fallido, Correo ya registrado o datos faltantes </p>";
            }
            
            
        }else {
            $Salida ="<script> alert('La confirmacion de la contraseña es diferente de la contraseña ingresada')</script>";
            $Salida2 = "<p> La confirmacion de la contraseña es diferente de la contraseña ingresada </p>";
        }
    }else{
        $Salida ="<script> alert('El mail usado no existe, asegurese de que este escrito correctamente o que la direccion sea valida')</script>";
        $Salida2 = "<p> El mail usado no existe, asegurese de que este escrito correctamente o que la direccion sea valida </p>";
    }
}



?>