<?php

class Facturas {
    private $IdFactura;
    private $Direccion;
    private $MedioDePago;
    private $Fecha;
    private $TotalAPagar;
    private $IVA;
    private $TotalAPagarConIVA;
    private $IdUsuario;

    public function __construct($IdFactura=null,$Direccion=null,$MedioDePago=null,$Fecha=null,$TotalAPagar=null,$IVA=1.21,$IdUsuario=null){
        $this->IdFactura = $IdFactura;
        $this->Direccion = $Direccion;
        $this->MedioDePago = $MedioDePago;
        $this->Fecha = $Fecha;
        $this->TotalAPagar = $TotalAPagar;
        $this->IVA = $IVA;
        $this->TotalAPagarConIVA = $TotalAPagar * $IVA;
        $this->IdUsuario = $IdUsuario;
    }

    public function GetIdFactura(){
        return $this->IdFactura;
    }

    public function SetIdFactura($IdFactura){
        $this->IdFactura = $IdFactura;
    }

    public function GetDireccion(){
        return $this->Direccion;
    }

    public function SetDireccion($Direccion){
        $this->Direccion = $Direccion;
    }

    public function GetMedioDePago(){
        return $this->MedioDePago;
    }

    public function SetMedioDePAgo($MedioDePago){
        $this->MedioDePago = $MedioDePago;
    }

    public function GetFecha(){
        return $this->Fecha;
    }

    public function SetFecha($Fecha){
        $this->Fecha = $Fecha;
    }

    public function GetTotalAPagar(){
        return $this->TotalAPagar;
    }

    public function SetTotalAPagar($TotalAPagar){
        $this->TotalAPagar = $TotalAPagar;
        $this->TotalAPagarConIVA = $this->TotalAPagar * $this->IVA;
    }

    public function GetIVA(){
        return $this->IVA;
    }

    public function SetIVA($IVA){
        $this->IVA = $IVA;
    }

    public function GetTotalAPagarConIVA(){
        return $this->TotalAPagarConIVA;
    }

    public function SetTotalAPagarConIVA($TotalAPagarConIVA){
        $this->TotalAPagarConIVA = $TotalAPagarConIVA;
    }

    public function SetIdUsuario($IdUsuario){
        $this->IdUsuario = $IdUsuario;
    }

    public function GetIdUsuario(){
        return $this->IdUsuario;
    }

}


?>



