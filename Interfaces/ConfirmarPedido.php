<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="IMGs/Logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <?php
        require_once("Componentes/Menu.php");
    ?>
    <div class="Contenido Contenido2">
    <header>
        <div  class="Logotipo2">
            <img class="LogoTipoIMG2" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
        <a class="Confirm" href="ConfirmarPedido.php" role="button">
            <div class="Carrito">
            <span class="material-symbols-outlined CarritoCompra">Shopping_cart</span>
            <i class="TextoCarrito">Carrito de compra</i>
            </div>
        </a>
    </header>
    <div class="InicioSesionContainer">
        <div class="InicioDeSesion">

                <form class="InSe" action="ComfirmarPedidoController.php" method="post">
                    <h2>Crear Pedido</h2>
                    <label class="TituloForm" for="Direccion">Dirección</label>
                        <input class="InputForm" type="text" name="Direccion" id="Direccion"  required>
                    
                        <label class="TituloForm" for="MedioPago">Medio de Pago</label>
                        <select class="SelectForm" name="MedioPago" id="MedioPago">
                            <option class="optionForm" value="Visitante">Contra entrega</option>
                            <option class="optionForm" value="Administrador">Tarjeta</option>
                        </select>
                    
                    <input class="SendForm" type="submit" value="Confirmar compra" >
                </form>
                <div class="TableContainer">
                    <div class="Tables CarritoCompra">
                        <table class="Listado CarritoPedido">
                            <thead class="Encabezados">
                                <tr class="FilaEncabezados">
                                    <th class="Encabezado">Producto</th>
                                    <th class="Encabezado">Precio</th>
                                    <th class="Encabezado">Cantidad</th>
                                    <th class="Encabezado">Precio Total</th>
                                </tr>
                            </thead>
                            <tbody class="ContenidoListados">
                                <td class="ItemList">a</td>
                                <td class="ItemList">a</td>
                                <td class="ItemList">a</td>
                                <td class="ItemList">a</td>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="Total">Total</th>
                                    <td class="TotalPrecio" colspan="2"></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>