<?php

class Usuarios {
    private $IdUsuario;
    private $NombreUsuario;
    private $Email;
    private $Telefono;
    private $Contrasena;
    private $TipoId;
    private $ActividadId;

    public function __construct($IdUsuario=null,$NombreUsuario=null,$Email=null,$Telefono=null,$Contrasena=null,$TipoId=null,$ActividadId=null){
        $this->IdUsuario = $IdUsuario;
        $this->NombreUsuario = $NombreUsuario;
        $this->Email = $Email;
        $this->Telefono = $Telefono;
        $this->Contrasena = $Contrasena;
        $this->TipoId = $TipoId;
        $this->ActividadId = $ActividadId;
    }

    public function SetIdUsuario($IdUsuario){
        $this->IdUsuario=$IdUsuario;
    }

    public function GetIdUsuario(){
        return $this->IdUsuario;
    }
    
    public function SetNombreUsuario($NombreUsuario){
        $this->NombreUsuario=$NombreUsuario;
    }

    public function GetNombreUsuario(){
        return $this->NombreUsuario;
    }

    public function SetEmail($Email){
        $this->Email=$Email;
    }

    public function GetEmail(){
        return $this->Email;
    }
    
    public function SetTelefono($Telefono){
        $this->Telefono=$Telefono;
    }

    public function GetTelefono(){
        return $this->Telefono;
    }
    
    public function SetContrasena($Contrasena){
        $this->Contrasena=$Contrasena;
    }

    public function GetContrasena(){
        return $this->Contrasena;
    }
    
    public function SetTipoId($TipoId){
        $this->TipoId=$TipoId;
    }

    public function GetTipoId(){
        return $this->TipoId;
    }
    
    public function SetActividadId($ActividadId){
        $this->ActividadId=$ActividadId;
    }

    public function GetActividadId(){
        return $this->ActividadId;
    }
    
}

?>