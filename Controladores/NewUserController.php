<?php

require_once("../BaseDatos/Conexion.php");
require_once("../Modelos/ClasesObj/Usuarios.php");
require_once("../Modelos/UsuariosSQL.php");
require '../Modelos/Composer/vendor/autoload.php';
require_once("../Modelos/Composer/ComprobarMail.php");

if ($_POST!=null) {
    $NombreUsusario=$_POST['Nombre'];
    $Email=$_POST['Email'];
    $Telefono=$_POST['Telefono'];
    $Contrasena=$_POST['Contraseña'];
    $Contrasena2=$_POST['Contraseña2'];
    if(ComprobarMail::VerificarSiMailExiste($Email)){
        if ($Contrasena==$Contrasena2) {
            $Usuario = new Usuarios(null,$NombreUsusario, $Email, $Telefono, $Contrasena);
            $ConfirmacionRegistro = UsuarioSQL::Registro($Usuario);
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
        $Salida2 = "<p> La confirmacion de la contraseña es diferente de la contraseña iya registrado</p>";
    }
}



?>