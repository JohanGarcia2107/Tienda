<?php

require_once("../BaseDatos/Conexion.php");
require_once("ClasesObj/Productos.php");

class ProductosSQL{

    public static function InsertarProducto($Producto){
        
        $NombreProducto=$Producto->GetNombreProducto();
        $DirIMGProd=$Producto->GetDirIMGProd();
        $Descripcion=$Producto->GetDescripcion();
        $Precio=$Producto->GetPrecio();
        $Stock=$Producto->GetStock();
        $IdCategoria=$Producto->GetIdCategoria();



        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("INSERT INTO `productos` (`DireccionIMGProd`, `Nombre`, `Descripcion`, `Precio`, `Stock`, `IdCategoria`) VALUES (:DirIMGProd, :NombreProducto, :Descripcion, :Precio, :Stock, :IdCategoria);");
            $sentencia->bindParam(':DirIMGProd', $DirIMGProd);
            $sentencia->bindParam(':NombreProducto', $NombreProducto);
            $sentencia->bindParam(':Descripcion', $Descripcion);
            $sentencia->bindParam(':Precio', $Precio);
            $sentencia->bindParam(':Stock', $Stock);
            $sentencia->bindParam(':IdCategoria', $IdCategoria);
            
            $sentencia->execute();


            $sentencia=null;
            $Conexion=null;
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

    public static function ActualizarProducto($Producto){
        
        $IdProducto=$Producto->GetIdProducto();
        $NombreProducto=$Producto->GetNombreProducto();
        $DirIMGProd=$Producto->GetDirIMGProd();
        $Descripcion=$Producto->GetDescripcion();
        $Precio=$Producto->GetPrecio();
        $Stock=$Producto->GetStock();
        $IdCategoria=$Producto->GetIdCategoria();
        $IdActividad=$Producto->GetActividadId();



        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `productos` SET `DireccionIMGProd` = :DirIMGProd, `Nombre` = :NombreProducto, `Descripcion` = :Descripcion, `Precio` = :Precio, `Stock` = :Stock, `IdCategoria` = :IdCategoria WHERE `productos`.`IdProducto` = :IdProducto;");

            $sentencia->bindParam(':DirIMGProd', $DirIMGProd);
            $sentencia->bindParam(':NombreProducto', $NombreProducto);
            $sentencia->bindParam(':Descripcion', $Descripcion);
            $sentencia->bindParam(':Precio', $Precio);
            $sentencia->bindParam(':Stock', $Stock);
            $sentencia->bindParam(':IdCategoria', $IdCategoria);
            $sentencia->bindParam(':IdActividad', $IdActividad);
            $sentencia->bindParam(':IdProducto', $IdProducto);
            
            $sentencia->execute();


            $sentencia=null;
            $Conexion=null;
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

    public static function EliminarProducto($IdProducto){
        $IdProducto=$IdProducto;

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `productos` SET `IdActividad` = '2' WHERE `productos`.`IdProducto` = :IdProducto;");
            $sentencia->bindParam(':IdProducto',$IdProducto);
            
            $sentencia->execute();


            $sentencia=null;
            $Conexion=null;
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

    public static function HabilitarProducto($IdProducto){
        $IdProducto=$IdProducto;

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("UPDATE `productos` SET `IdActividad` = '1' WHERE `productos`.`IdProducto` = :IdProducto;");
            $sentencia->bindParam(':IdProducto',$IdProducto);
            
            $sentencia->execute();


            $sentencia=null;
            $Conexion=null;
            return true;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return false;
        }

    }

    public static function ListarProductos($Valor=null){
        $ListaProductos=array();
        $Valor=$Valor;
        

        try {
            $Conexion=Conexion::getConexion();

            if (ctype_digit($Valor)) {
                $sentencia = $Conexion->prepare("SELECT `productos`.`IdProducto`, `productos`.`Nombre`, `productos`.`DireccionIMGProd`, `productos`.`Descripcion`, `productos`.`Precio`, `productos`.`Stock`, `categorias`.`NombreCategoria` as `Categoria`, `actividad`.`NombreCtividad` AS `Actividad` FROM `productos` JOIN `categorias` on `productos`.`IdCategoria`=`categorias`.`IdCategoria` JOIN `actividad` on `productos`.`IdActividad`=`actividad`.`IdActividad` WHERE `productos`.`IdProducto`=:Valor;");
                $sentencia->bindParam(':Valor',$Valor);

            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Producto=new Productos();
                    $Producto->SetIdProducto($FilaActual['IdProducto']);
                    $Producto->SetNombreProducto($FilaActual['Nombre']);
                    $Producto->SetDirIMGProd($FilaActual['DireccionIMGProd']);
                    $Producto->SetDescripcion($FilaActual['Descripcion']);
                    $Producto->SetPrecio($FilaActual['Precio']);
                    $Producto->SetStock($FilaActual['Stock']);
                    $Producto->SetIdCategoria($FilaActual['Categoria']);
                    $Producto->SetActividadId($FilaActual['Actividad']);
                    

                
                    array_push($ListaProductos,$Producto);
                }

            }elseif (is_string($Valor)) {
                $Valor="%".$Valor."%";
                $sentencia = $Conexion->prepare("SELECT `productos`.`IdProducto`, `productos`.`Nombre`, `productos`.`DireccionIMGProd`, `productos`.`Descripcion`, `productos`.`Precio`, `productos`.`Stock`, `categorias`.`NombreCategoria` as `Categoria`, `actividad`.`NombreCtividad` AS `Actividad` FROM `productos` JOIN `categorias` on `productos`.`IdCategoria`=`categorias`.`IdCategoria` JOIN `actividad` on `productos`.`IdActividad`=`actividad`.`IdActividad` WHERE `productos`.`Nombre` LIKE :Valor OR `categorias`.`NombreCategoria` LIKE :Valor;");
                $sentencia->bindParam(':Valor',$Valor);
            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Producto=new Productos();
                    $Producto->SetIdProducto($FilaActual['IdProducto']);
                    $Producto->SetNombreProducto($FilaActual['Nombre']);
                    $Producto->SetDirIMGProd($FilaActual['DireccionIMGProd']);
                    $Producto->SetDescripcion($FilaActual['Descripcion']);
                    $Producto->SetPrecio($FilaActual['Precio']);
                    $Producto->SetStock($FilaActual['Stock']);
                    $Producto->SetIdCategoria($FilaActual['Categoria']);
                    $Producto->SetActividadId($FilaActual['Actividad']);
                    

                
                    array_push($ListaProductos,$Producto);
                }

            }else {

                $sentencia = $Conexion->prepare("SELECT `productos`.`IdProducto`, `productos`.`Nombre`, `productos`.`DireccionIMGProd`, `productos`.`Descripcion`, `productos`.`Precio`, `productos`.`Stock`, `categorias`.`NombreCategoria` as `Categoria`, `actividad`.`NombreCtividad` AS `Actividad` FROM `productos` JOIN `categorias` on `productos`.`IdCategoria`=`categorias`.`IdCategoria` JOIN `actividad` on `productos`.`IdActividad`=`actividad`.`IdActividad`;");
            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Producto=new Productos();
                    $Producto->SetIdProducto($FilaActual['IdProducto']);
                    $Producto->SetNombreProducto($FilaActual['Nombre']);
                    $Producto->SetDirIMGProd($FilaActual['DireccionIMGProd']);
                    $Producto->SetDescripcion($FilaActual['Descripcion']);
                    $Producto->SetPrecio($FilaActual['Precio']);
                    $Producto->SetStock($FilaActual['Stock']);
                    $Producto->SetIdCategoria($FilaActual['Categoria']);
                    $Producto->SetActividadId($FilaActual['Actividad']);
                    

                
                    array_push($ListaProductos,$Producto);
                }
            }

            $sentencia=null;
            $Conexion=null;

            return $ListaProductos;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }

    }

    public static function ListarProductosUser($Valor=null){
        $ListaProductos=array();
        $Valor=$Valor;
        if (isset($Valor)) {
            $Valor=strval($Valor);
        }
        

        try {
            $Conexion=Conexion::getConexion();

            if (is_string($Valor)) {
                $Valor="%".$Valor."%";
                $sentencia = $Conexion->prepare("SELECT `productos`.`IdProducto`, `productos`.`Nombre`, `productos`.`DireccionIMGProd`, `productos`.`Descripcion`, `productos`.`Precio`, `productos`.`Stock`, `categorias`.`NombreCategoria` as `Categoria`, `actividad`.`NombreCtividad` AS `Actividad` FROM `productos` JOIN `categorias` on `productos`.`IdCategoria`=`categorias`.`IdCategoria` JOIN `actividad` on `productos`.`IdActividad`=`actividad`.`IdActividad` WHERE `productos`.`Nombre` LIKE :Valor AND `productos`.`IdActividad`= 1 OR `categorias`.`NombreCategoria` LIKE :Valor AND `productos`.`IdActividad`= 1;");
                $sentencia->bindParam(':Valor',$Valor);
            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Producto=new Productos();
                    $Producto->SetIdProducto($FilaActual['IdProducto']);
                    $Producto->SetNombreProducto($FilaActual['Nombre']);
                    $Producto->SetDirIMGProd($FilaActual['DireccionIMGProd']);
                    $Producto->SetPrecio($FilaActual['Precio']);
                    $Producto->SetStock($FilaActual['Stock']);
                    

                
                    array_push($ListaProductos,$Producto);
                }

            }else {

                $sentencia = $Conexion->prepare("SELECT * FROM `productos` WHERE  `productos`.`IdActividad`= 1;");
            
                $sentencia->execute();

                $Fila=$sentencia->fetchAll();

                foreach ($Fila as $FilaActual) {
                    $Producto=new Productos();
                    $Producto->SetIdProducto($FilaActual['IdProducto']);
                    $Producto->SetNombreProducto($FilaActual['Nombre']);
                    $Producto->SetDirIMGProd($FilaActual['DireccionIMGProd']);
                    $Producto->SetPrecio($FilaActual['Precio']);
                    $Producto->SetStock($FilaActual['Stock']);
                    

                
                    array_push($ListaProductos,$Producto);
                }
            }

            $sentencia=null;
            $Conexion=null;

            return $ListaProductos;


        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            return null;
        }
    }

    public static function VistaProducto($IdProducto){
        $IdProducto=$IdProducto;

        try {
            $Conexion=Conexion::getConexion();

            $sentencia = $Conexion->prepare("SELECT * FROM `productos` WHERE `IdProducto` = :IdProducto ;");
            $sentencia->bindParam(':IdProducto',$IdProducto);
            
            $sentencia->execute();

            $Fila=$sentencia->fetch(PDO::FETCH_ASSOC);

            if($Fila){
                $Producto=new Productos();
                    $Producto->SetIdProducto($Fila['IdProducto']);
                    $Producto->SetNombreProducto($Fila['Nombre']);
                    $Producto->SetDirIMGProd($Fila['DireccionIMGProd']);
                    $Producto->SetDescripcion($Fila['Descripcion']);
                    $Producto->SetPrecio($Fila['Precio']);
                    $Producto->SetStock($Fila['Stock']);
                    $Producto->SetIdCategoria($Fila['IdCategoria']);
                    $Producto->SetActividadId($Fila['IdActividad']);

                return $Producto;
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
}

//Pruebas

/*$Producto=new Productos(null,"ProductoPrueba","por ahi","no se",10000,5,2);
ProductosSQL::InsertarProducto($Producto); Si sirve */

/*$Producto= new Productos(8,"Producto2Prueba Cambiado","no hay","tampoco hay",12000,3,1);
ProductosSQL::ActualizarProducto($Producto); Si sirve */

/*ProductosSQL::EliminarProducto(8); Si sirve */

/*$ListadoProductos=ProductosSQL::ListarProductos("im");
print_r($ListadoProductos); Si sirve*/ 

/*$ListadoProductos=ProductosSQL::ListarProductosUser("im");
print_r($ListadoProductos); Si sirve */

/*$Producto=ProductosSQL::VistaProducto(8);
print_r($Producto); Si sirve*/





?>