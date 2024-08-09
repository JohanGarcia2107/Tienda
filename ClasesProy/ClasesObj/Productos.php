<?php


class Productos {
    private $IdProducto;
    private $DirIMGProd;
    private $NombreProducto;
    private $Descripcion;
    private $Precio;
    private $Stock;
    private $IdCategoria;
    private $ActividadId;

    public function __construct($IdProducto=null,$NombreProducto=null,$DirIMGProd=null, $Descripcion=null,$Precio=null,$Stock=null,$IdCategoria=null,$ActividadId=1){
        $this->IdProducto = $IdProducto;
        $this->NombreProducto = $NombreProducto;
        $this->DirIMGProd = $DirIMGProd;
        $this->Descripcion = $Descripcion;
        $this->Precio = $Precio;
        $this->Stock = $Stock;
        $this->IdCategoria = $IdCategoria;
        $this->ActividadId = $ActividadId;
    }

    public function SetIdProducto($IdProducto){
        $this->IdProducto=$IdProducto;
    }

    public function GetIdProducto(){
        return $this->IdProducto;
    }
    
    public function SetNombreProducto($NombreProducto){
        $this->NombreProducto=$NombreProducto;
    }

    public function GetNombreProducto(){
        return $this->NombreProducto;
    }

    public function SetDirIMGProd($DirIMGProd){
        $this->DirIMGProd=$DirIMGProd;
    }

    public function GetDirIMGProd(){
        return $this->DirIMGProd;
    }

    public function SetDescripcion($Descripcion){
        $this->Descripcion=$Descripcion;
    }

    public function GetDescripcion(){
        return $this->Descripcion;
    }

    
    public function SetPrecio($Precio){
        $this->Precio=$Precio;
    }

    public function GetPrecio(){
        return $this->Precio;
    }
    
    public function SetStock($Stock){
        $this->Stock=$Stock;
    }

    public function GetStock(){
        return $this->Stock;
    }
    
    public function SetIdCategoria($IdCategoria){
        $this->IdCategoria=$IdCategoria;
    }

    public function GetIdCategoria(){
        return $this->IdCategoria;
    }
    
    public function SetActividadId($ActividadId){
        $this->ActividadId=$ActividadId;
    }

    public function GetActividadId(){
        return $this->ActividadId;
    }

}

?>

