<?php

if ($_POST) {
    if (isset($_POST['CantidadAComprar'])) {
        if (ctype_digit($_POST['CantidadAComprar']) && is_int(intval($_POST['CantidadAComprar'])) && $ProductoEnCarrito==false) {
            if ($Stock<intval($_POST['CantidadAComprar']) || intval($_POST['CantidadAComprar'])<1) {
                echo "<script> alert('No hay suficiente stock para realizar la compra, asegurese que la cantidad ingresada no supere el stock disponible y que no sea menor a 1')</script>";
            }elseif (!($_POST['CantidadAComprar'])) {
                echo "<script> alert('El campo de cantidad no puede estar vacio')</script>";
            }else {
                if (isset($_SESSION['CarritoDeComprar'])) {
                    $Carrito = $_SESSION['CarritoDeComprar'];
                    if ($_POST) {
                        $CantidadAComprar = $_POST['CantidadAComprar'];
                        $PrecioTotal = $Precio*$CantidadAComprar;
                        $ProductoAComprar = new DetallesFacturas($IdProd,$NombreProd,$Precio,$CantidadAComprar,$PrecioTotal,null);
                        array_push($Carrito, $ProductoAComprar);
                        $_SESSION['CarritoDeComprar']=$Carrito;
                        header("location:VistaIndividualProd.php?IdProd=$IdProd");
                    }
                }else {
                    if ($_POST) {
                        $Carrito = array();
                        $CantidadAComprar = $_POST['CantidadAComprar'];
                        $PrecioTotal = $Precio*$CantidadAComprar;
                        $ProductoAComprar = new DetallesFacturas($IdProd,$NombreProd,$Precio,$CantidadAComprar,$PrecioTotal,null);
                        array_push($Carrito, $ProductoAComprar);
                        $_SESSION['CarritoDeComprar'] = $Carrito;
                        header("location:VistaIndividualProd.php?IdProd=$IdProd");
                    }
                }
            }
        }else {
            echo "<script> alert('La cantidad ingresada debe ser un numero entero')</script>";
        }
    }
    
    if (isset($_POST['ProductoABorrar'])) {
        if (ctype_digit($_POST['ProductoABorrar']) && $IdProd==$_POST['ProductoABorrar']) {
            $IdProdABorrar=$_POST['ProductoABorrar'];
            $MiCarrito=$_SESSION['CarritoDeComprar'];
            $Indices = array_keys($MiCarrito);
            for ($i=0; $i <= count($MiCarrito) ; $i++) { 
                $Indice = $Indices[$i];
                    if ($MiCarrito[$Indice]->getIdProducto()==$IdProdABorrar) {
                        unset($MiCarrito[$Indice]);
                        header("location:VistaIndividualProd.php?IdProd=$IdProd");
                    }
            }
            $_SESSION['CarritoDeComprar']=$MiCarrito;
        }else{
            echo "<script> alert('El producto a borrar no existe')</script>";
        }
    }
}





?>