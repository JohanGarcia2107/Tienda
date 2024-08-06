<?php

class Pedidos {
    private $IdPedido;
    private $IdFactura;
    private $IdUsuario;
    private $MontoAPagar;
    private $Fecha;
    private $Direccion;
    private $IdEstado;

    public function __construct($IdPedido=null,$IdFactura=null,$IdUsuario=null,$MontoAPagar=null,$Fecha=null,$Direccion=null,$IdEstado=1){
        $this->IdPedido = $IdPedido;
        $this->IdFactura = $IdFactura;
        $this->IdUsuario = $IdUsuario;
        $this->MontoAPagar = $MontoAPagar;
        $this->Fecha = $Fecha;
        $this->Direccion = $Direccion;
        $this->IdEstado = $IdEstado;
    }

    public function SetIdPedido($IdPedido){
        $this->IdPedido = $IdPedido;
    }

    public function GetIdPedido(){
        return $this->IdPedido;
    }

    public function SetIdFactura($IdFactura){
        $this->IdFactura = $IdFactura;
    }

    public function GetIdFactura(){
        return $this->IdFactura;
    }

    public function SetIdUsuario($IdUsuario){
        $this->IdUsuario = $IdUsuario;
    }

    public function GetIdUsuario(){
        return $this->IdUsuario;
    }

    public function SetMontoAPagar($MontoAPagar){
        $this->MontoAPagar = $MontoAPagar;
    }

    public function GetMontoAPagar(){
        return $this->MontoAPagar;
    }

    public function SetFecha($Fecha){
        $this->Fecha = $Fecha;
    }

    public function GetFecha(){
        return $this->Fecha;
    }

    public function SetDireccion($Direccion){
        $this->Direccion = $Direccion;
    }

    public function GetDireccion(){
        return $this->Direccion;
    }

    public function SetIdEstado($IdEstado){
        $this->IdEstado = $IdEstado;
    }

    public function GetIdEstado(){
        return $this->IdEstado;
    }

}


?>



