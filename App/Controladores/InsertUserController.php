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
    if (Comprobaciones::Vacios($NombreUsusario) && Comprobaciones::Vacios($Email) && Comprobaciones::Vacios($Telefono) && Comprobaciones::Vacios($TipoId) && Comprobaciones::Vacios($Contrasena) && Comprobaciones::Vacios($Contrasena2)) {
        if(ComprobarMail::VerificarSiMailExiste($Email)){
            if ($Contrasena==$Contrasena2) {
                if (strlen($Contrasena)>=8) {
                    $Contrasena=hash('ripemd160', $_POST['InsertarUsuarioContraseña']);
                    $Usuario = new Usuarios(null,$NombreUsusario, $Email, $Telefono, $Contrasena, $TipoId);
                    $ConfirmacionRegistro = UsuarioSQL::InsertarUsuario($Usuario);
                    if ($ConfirmacionRegistro=="Registro Exitoso") {
                        echo "<script> alert('Registro exitoso, ya puedes iniciar sesión')</script>";
                        echo "<script> window.location.href='ListarUsuarios.php';</script>";
                    }else {
                        $Salida ="<script> alert('Registro fallido, Correo ya registrado o datos faltantes')</script>";
                        $Salida2 = "<p> Registro fallido, Correo ya registrado o datos faltantes </p>";
                    }
                }else{
                    $Salida ="<script> alert('La contraseña debe tener al menos 8 caracteres')</script>";
                    $Salida2 = "<p> La contraseña debe tener al menos 8 caracteres </p>";
                }
                
            }else {
                $Salida ="<script> alert('La confirmacion de la contraseña es diferente de la contraseña ingresada')</script>";
                $Salida2 = "<p> La confirmacion de la contraseña es diferente de la contraseña ingresada </p>";
            }
        }else{
            $Salida ="<script> alert('El mail usado no existe, asegurese de que este escrito correctamente o que la direccion sea valida')</script>";
            $Salida2 = "<p> El mail usado no existe, asegurese de que este escrito correctamente o que la direccion sea valida </p>";
        }
    }else{
        $Salida ="<script> alert('Faltan datos o ingresaste HTML')</script>";
        $Salida2 = "<p> Faltan datos o ingresaste HTML </p>";
    }
    
}



?>