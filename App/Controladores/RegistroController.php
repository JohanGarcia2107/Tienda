<?php
session_start();

$Salida = null;
$Salida2 = null;
if ($_SESSION) {
    header('location:../index.php');
}
if ($_POST) {
    $NombreUsusario=$_POST['NombreRegistro'];
    $Email=$_POST['EmailRegistro'];
    $Telefono=$_POST['TelefonoRegistro'];
    $Contrasena=$_POST['ContraseñaRegistro'];
    $Contrasena2=$_POST['Contraseña2Registro'];
    if (Comprobaciones::Vacios($NombreUsusario) && (Comprobaciones::Vacios($Email)) && Comprobaciones::Vacios($Telefono) && (Comprobaciones::Vacios($Contrasena)) && (Comprobaciones::Vacios($Contrasena2))) {
        if(ComprobarMail::VerificarSiMailExiste($Email)){
            if ($Contrasena==$Contrasena2) {
                $Usuario = new Usuarios(null,$NombreUsusario, $Email, $Telefono, $Contrasena);
                $ConfirmacionRegistro = UsuarioSQL::Registro($Usuario);
                if ($ConfirmacionRegistro=="Registro Exitoso") {
                    echo "<script> alert('Registro exitoso, ya puedes iniciar sesión')</script>";
                    echo "<script> window.location.href='InicioSesion.php';</script>";
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
    }else {
        $Salida ="<script> alert('No pueden haber campos vacios')</script>";
            $Salida2 = "<p> No pueden haber campos vacios </p>";
    }
    
}



?>