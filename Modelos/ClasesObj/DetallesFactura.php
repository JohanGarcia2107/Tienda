<?php

class DetallesFacturas {
    private $IdProducto;
    private $NombreProducto;
    private $Precio;
    private $Cantidad;
    private $PrecioTotal;
    private $IdFactura;

    public function __construct($IdProducto=null, $NombreProducto=null, $Precio=null,$Cantidad=null,$PrecioTotal=null,$IdFactura=null){
        $this->IdProducto = $IdProducto;
        $this->NombreProducto = $NombreProducto;
        $this->Precio = $Precio;
        $this->Cantidad = $Cantidad;
        $this->PrecioTotal = $PrecioTotal;
        $this->IdFactura = $IdFactura;
    }


    public function SetIdProducto($IdProducto){
        $this->IdProducto = $IdProducto;
    }

    public function GetIdProducto(){
        return $this->IdProducto;
    }

    public function SetNombreProductoDetalle($NombreProducto){
        $this->NombreProducto = $NombreProducto;
    }

    public function GetNombreProductoDetalle(){
        return $this->NombreProducto;
    }

    public function SetPrecio($Precio){
        $this->Precio = $Precio;
    }

    public function GetPrecio(){
        return $this->Precio;
    }

    public function SetCantidad($Cantidad){
        $this->Cantidad = $Cantidad;
    }

    public function GetCantidad(){
        return $this->Cantidad;
    }

    public function SetPrecioTotal($PrecioTotal){
        $this->PrecioTotal = $PrecioTotal;
    }

    public function GetPrecioTotal(){
        return $this->PrecioTotal;
    }

    public function SetIdFactura($IdFactura){
        $this->IdFactura = $IdFactura;
    }

    public function GetIdFactura(){
        return $this->IdFactura;
    }

}


?>



