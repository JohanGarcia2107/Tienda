<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="icon" href="../IMGs/Logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
<section class="Side_bar">
        <div class="menus_container">
            <div class="logo_container">
                    <img src="../IMGs/Logo.png" class="logo" alt="logo">
            </div>
            <label class="ControlMenu C1">
                <input class="DisplayMenu D1" type="radio" name="Manejador" id="abrir">
                <span class="material-symbols-outlined">Menu</span>
            </label>
            <label class="ControlMenu C2">
                <input class="DisplayMenu D2" type="radio" name="Manejador" id="cerrar" checked>
                <span class="material-symbols-outlined">Close</span>
            </label>
            <nav class="Menu">
                <ul class="menu_container">
                    <li class="menu_item"><a href="../index.php"><span class="material-symbols-outlined">Home</span><i>Inicio</i></a></li>
                    <li class="menu_item"><a href="Productos.php"><span class="material-symbols-outlined">Shopping_cart</span><i>Compra</i></a></li>
                    <li class="menu_item"><a href="../index.php#Contacto"><span class="material-symbols-outlined">Mail</span><i>Contactanos</i></a></li>
                    <li class="menu_item"><a href="../index.php#NuestrosServicios"><span class="material-symbols-outlined">Work</span><i>Nuestros Servicios</i></a></li>
                    <li class="menu_item"><a href="../index.php#NuestrosTrabajos"><span class="material-symbols-outlined">Design_Services</span><i>Nuestros Trabajos</i></a></li>
                </ul>
            </nav>
            <nav class="Menu">
                <ul class="menu_container">
                    <li class="menu_item"><a href="Perfil.php"><span class="material-symbols-outlined">Person</span><i>Perfil</i></a></li>
                    <li class="menu_item"><a href="InicioSesion.php"><span class="material-symbols-outlined">Login</span><i>Iniciar Sesion</i></a></li>
                </ul>
            </nav>
        </div>
    </section>
    <div class="Contenido">
    <header>
        <div  class="Logotipo2">
            <img class="LogoTipoIMG2" src="../IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
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

                <form class="InSe" action="">
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