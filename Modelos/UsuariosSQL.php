<?php

class UsuarioSQL{

    public static function Registro($Usuario){
        $NombreUsusario=$Usuario->GetNombreUsuario();
        $Email=$Usuario->GetEmail();
        $Telefono=$Usuario->GetTelefono();
        $Contrasena=$Usuario->GetContrasena();


        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("INSERT INTO `usuarios` ( Nombre, Email, Telefono, Contrasena) VALUES (:NombreUsusario, :Email, :Telefono, :Contrasena)");
            $sentencia->bindParam(':NombreUsusario', $NombreUsusario);
            $sentencia->bindParam(':Email', $Email);
            $sentencia->bindParam(':Telefono', $Telefono);
            $sentencia->bindParam(':Contrasena', $Contrasena);

            if ($sentencia->execute()) {
                $return="Registro Exitoso";
            }else{
                $e=new PDOException;
                $Error = 'Error: ' . $e->getMessage();
                $return=$Error;
            }


            $sentencia=null;
            $Conexion=null;
            return $return;
        } catch (PDOException $e) {
            $Error = 'Error: ' . $e->getMessage();
            return $Error;
        }

    }

    public static function InsertarUsuario($Usuario){
        $NombreUsusario=$Usuario->GetNombreUsuario();
        $Email=$Usuario->GetEmail();
        $Telefono=$Usuario->GetTelefono();
        $Contrasena=$Usuario->GetContrasena();
        $TipoId=$Usuario->GetTipoId();

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("INSERT INTO `usuarios` ( Nombre, Email, Telefono, Contrasena, IdTipo) VALUES (:NombreUsusario, :Email, :Telefono, :Contrasena, :IdTipo)");
            $sentencia->bindParam(':NombreUsusario', $NombreUsusario);
            $sentencia->bindParam(':Email', $Email);
            $sentencia->bindParam(':Telefono', $Telefono);
            $sentencia->bindParam(':Contrasena', $Contrasena);
            $sentencia->bindParam(':IdTipo', $TipoId);
            
            if ($sentencia->execute()) {
                return "Registro Exitoso";
            }else{
                $e=new PDOException;
                return $e;
            }


            $sentencia=null;
            $Conexion=null;
            return true;
        } catch (PDOException $e) {
            return false;
        }

    }

    public static function InicioSesion($Correo, $Contrasena){


        $Correo=$Correo;
        $Contrasena=$Contrasena;

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("SELECT * FROM `usuarios` WHERE Email = :Correo AND Contrasena = :Contrasena AND IdActividad = 1;");
            $sentencia->bindParam(':Correo', $Correo);
            $sentencia->bindParam(':Contrasena', $Contrasena);
            
            
            $sentencia->execute();

            $Fila=$sentencia->fetch(PDO::FETCH_ASSOC);

            if($Fila){
                $Usuario=new Usuarios();
                $Usuario->SetIdUsuario($Fila['IdUsuario']);
                $Usuario->SetNombreUsuario($Fila['Nombre']);
                $Usuario->SetTipoId($Fila['IdTipo']);
                $Usuario->SetActividadId($Fila['IdActividad']);

                return $Usuario;
            }else{
                return "Usuario inexistente";
            }


            $sentencia=null;
            $Conexion=null;

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }

    }

    public static function ActualizaUsuario($Usuario){
        $IdUsuario=$Usuario->GetIdUsuario();
        $NombreUsusario=$Usuario->GetNombreUsuario();
        $Email=$Usuario->GetEmail();
        $Telefono=$Usuario->GetTelefono();
        $Contrasena=$Usuario->GetContrasena();

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `usuarios` SET `Nombre` = :NombreUsusario, `Email` = :Email, `Telefono` = :Telefono, `Contrasena` = :Contrasena WHERE `usuarios`.`IdUsuario` = :IdUsuario;");
            $sentencia->bindParam(':IdUsuario', $IdUsuario);
            $sentencia->bindParam(':NombreUsusario', $NombreUsusario);
            $sentencia->bindParam(':Email', $Email);
            $sentencia->bindParam(':Telefono', $Telefono);
            $sentencia->bindParam(':Contrasena', $Contrasena);
            
            if ($sentencia->execute()) {
                return true;
            }else{
                $e=new PDOException;
                echo 'Error: ' . $e->getMessage();
                return false;
            }


            $sentencia=null;
            $Conexion=null;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

    public static function VistaUsuario($IdUsuario){

        $IdUsuario=$IdUsuario;

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("SELECT * FROM `usuarios` WHERE IdUsuario = :IdUsuario ;");
            $sentencia->bindParam(':IdUsuario', $IdUsuario);
            
            $sentencia->execute();

            $Fila=$sentencia->fetch(PDO::FETCH_ASSOC);

            if($Fila){
                $Usuario=new Usuarios();
                $Usuario->SetIdUsuario($Fila['IdUsuario']);
                $Usuario->SetNombreUsuario($Fila['Nombre']);
                $Usuario->SetEmail($Fila['Email']);
                $Usuario->SetTelefono($Fila['Telefono']);
                $Usuario->SetContrasena($Fila['Contrasena']);
                $Usuario->SetTipoId($Fila['IdTipo']);
                $Usuario->SetActividadId($Fila['IdActividad']);

                return $Usuario;
            }else{
                return null;
            }


            $sentencia=null;
            $Conexion=null;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }

    }

    public static function ListarUsuarios($Valor=null){

        $ListaUsuarios=array();
        $Valor=$Valor;
        

        try {
            $Conexion=Conexion::getConexion();

            if (ctype_digit($Valor)) {
                $sentencia = $Conexion->prepare("SELECT * FROM `usuarios` WHERE `IdUsuario` = :Valor");
                $sentencia->bindParam(':Valor',$Valor);
            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

            

                foreach ($Fila as $FilaActual) {
                    $Usuario=new Usuarios();
                    $Usuario->SetNombreUsuario($FilaActual['Nombre']);
                    $Usuario->SetIdUsuario($FilaActual['IdUsuario']);
                    $Usuario->SetEmail($FilaActual['Email']);
                    $Usuario->SetTelefono($FilaActual['Telefono']);
                    $Usuario->SetContrasena($FilaActual['Contrasena']);
                    $Usuario->SetTipoId($FilaActual['IdTipo']);
                    $Usuario->SetActividadId($FilaActual['IdActividad']);

                
                    array_push($ListaUsuarios,$Usuario);
                }

            }elseif (is_string($Valor)) {
                $Valor="%".$Valor."%";
                $sentencia = $Conexion->prepare("SELECT * FROM `usuarios` WHERE `Nombre` LIKE :Valor");
                $sentencia->bindParam(':Valor',$Valor);
            
                $sentencia->execute();

            

                $Fila=$sentencia->fetchAll();


            

                foreach ($Fila as $FilaActual) {
                    $Usuario=new Usuarios();
                    $Usuario->SetNombreUsuario($FilaActual['Nombre']);
                    $Usuario->SetIdUsuario($FilaActual['IdUsuario']);
                    $Usuario->SetEmail($FilaActual['Email']);
                    $Usuario->SetTelefono($FilaActual['Telefono']);
                    $Usuario->SetContrasena($FilaActual['Contrasena']);
                    $Usuario->SetTipoId($FilaActual['IdTipo']);
                    $Usuario->SetActividadId($FilaActual['IdActividad']);

                
                    array_push($ListaUsuarios,$Usuario);
                }

            }else {
                $sentencia = $Conexion->prepare("SELECT * FROM `usuarios`");
            
                $sentencia->execute();


                $Fila=$sentencia->fetchAll();

            

                foreach ($Fila as $FilaActual) {
                    $Usuario=new Usuarios();
                    $Usuario->SetNombreUsuario($FilaActual['Nombre']);
                    $Usuario->SetIdUsuario($FilaActual['IdUsuario']);
                    $Usuario->SetEmail($FilaActual['Email']);
                    $Usuario->SetTelefono($FilaActual['Telefono']);
                    $Usuario->SetContrasena($FilaActual['Contrasena']);
                    $Usuario->SetTipoId($FilaActual['IdTipo']);
                    $Usuario->SetActividadId($FilaActual['IdActividad']);

                
                    array_push($ListaUsuarios,$Usuario);
                }
            }

            $sentencia=null;
            $Conexion=null;

            return $ListaUsuarios;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }

    }

    public static function EliminarUsuario($IdUsuario){
        $IdUsuario=$IdUsuario;

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `usuarios` SET `IdActividad` = '2' WHERE `usuarios`.`IdUsuario` = :IdUsuario");
            $sentencia->bindParam(':IdUsuario',$IdUsuario);
            
            $sentencia->execute();


            $sentencia=null;
            $Conexion=null;
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

    public static function HabilitarUsuario($IdUsuario){
        $IdUsuario=$IdUsuario;

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `usuarios` SET `IdActividad` = '1' WHERE `usuarios`.`IdUsuario` = :IdUsuario");
            $sentencia->bindParam(':IdUsuario',$IdUsuario);
            
            $sentencia->execute();


            $sentencia=null;
            $Conexion=null;
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }
    }
}



//Pruebas


/*$Usuario= new Usuarios(null,"b","d","123","contra");
UsuarioSQL::Registro($Usuario); Si sirve*/


/*$Usuario= new Usuarios(null,"c","c","123","contra",2);
UsuarioSQL::InsertarUsuario($Usuario);
print_r($Usuario); Si sirve*/

/*$Usuario=UsuarioSQL::InicioSesion("laura.gonzalez2000@hotmail.com","S3cur3P@ssw0rd");
print_r($Usuario); Si sirve*/

/*$Usuario= new Usuarios(11,"z","z","correo","contrasen");
UsuarioSQL::ActualizaUsuario($Usuario); Si sirve*/

/*$Usuario= new Usuarios();
$Usuario=UsuarioSQL::VistaUsuario(1);
print_r($Usuario); Si Sirve*/

/*$ListadoUsers=UsuarioSQL::ListarUsuarios("an");
print_r($ListadoUsers); Si sirve*/

/*UsuarioSQL::EliminarUsuario(11); Si sirve */


?>