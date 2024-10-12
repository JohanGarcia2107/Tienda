<?php
session_start();

if (isset($_POST['DireccionPedido'])) {
        if (Comprobaciones::Vacios($_POST['DireccionPedido']) && ($_POST['MedioPago'] == "1") && (!(empty($_SESSION['CarritoDeComprar'])))){
            $MedioDePago="Contra Entrega";
            $Factura = new Facturas(null,$_POST['DireccionPedido'],$MedioDePago,null,null,null,$_SESSION['IdUsuario']);
            $IdFac=FacturasSQL::InsertarFactura($Factura);
            if (is_int(intval($IdFac))){
                foreach ($_SESSION['CarritoDeComprar'] as $Detalle) {
                $Detalle->SetIdFactura($IdFac);
                DetallesFacturaSQL::InsertarDetalle($Detalle);
                Comprobaciones::ActualizarStock($Detalle->GetIdProducto(),$Detalle->GetCantidad());
                }
                unset($_SESSION['CarritoDeComprar']);
                echo "<script> alert('Pedido guardado con exito, puedes revisarlo en la ventana de pedidos')</script>";
                echo "<script> window.location.href='Pedidos.php';</script>";
            }else {
            echo "<script> alert('La direccion debe de ser puesta y el carrito no puede estar vacio')</script>";
            }
        }else {
            echo "<script> alert('La direccion debe de ser puesta y el carrito no puede estar vacio')</script>";
            }
}elseif(!(isset($_SESSION['CarritoDeComprar']))) {
    header('Location: Productos.php');
}

if (isset($_POST['ProductoABorrar'])) {
    if (ctype_digit($_POST['ProductoABorrar'])) {
        $IdProdABorrar=$_POST['ProductoABorrar'];
        $MiCarrito=$_SESSION['CarritoDeComprar'];
        $Indices = array_keys($MiCarrito);
        for ($i=0; $i <= count($MiCarrito) ; $i++) { 
            $Indice = $Indices[$i];
                if ($MiCarrito[$Indice]->getIdProducto()==$IdProdABorrar) {
                    unset($MiCarrito[$Indice]);
                    header("location:ConfirmarPedido.php");
                }
        }
        $_SESSION['CarritoDeComprar']=$MiCarrito;
    }else{
        echo "<script> alert('El producto a borrar no existe')</script>";
    }
}

?>