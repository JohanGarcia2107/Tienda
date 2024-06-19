<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
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
                <input class="DisplayMenu D1" type="radio" name="Manejador" id="abrir" checked>
                <span class="material-symbols-outlined">Menu</span>
            </label>
            <label class="ControlMenu C2">
                <input class="DisplayMenu D2" type="radio" name="Manejador" id="cerrar" >
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
                    <li class="menu_item"><a href="#"><span class="material-symbols-outlined">Person</span><i>Perfil</i></a></li>
                    <li class="menu_item"><a href="#"><span class="material-symbols-outlined">Login</span><i>Iniciar Sesion</i></a></li>
                </ul>
            </nav>
        </div>
    </section>
    <div class="Contenido">
    <header>
        <div  class="Logotipo2">
            <form class="BarraBusqueda" action="" method="">
                <input class="Input_Search" type="search" name="Buscar" placeholder="Buscar...">
                <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
            </form>
            <img class="LogoTipoIMG2" src="../IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
        <div class="Carrito">
            <label class="CarritoCompra" for="ManejadorCarrito">
                <input type="checkbox" class="ManejadorCarrito" name="ManejadorCarrito" id="ManejadorCarrito">
                <span class="material-symbols-outlined">Shopping_cart</span><i>Carrito de compra</i>
            </label>
            <table class="Pedido">
                <thead class="Detalles">
                    <tr class="FilaDetalles">
                        <th class="EncabezadoDetalles">Producto</th>
                        <th class="EncabezadoDetalles">Costo</th>
                        <th class="EncabezadoDetalles">Unidades</th>
                    </tr>
                </thead>
                <tbody class="ProductosPedido">
                    
                </tbody>
                <tfoot class="TotalProductos">
                <tr>
                    <th class="Total">Total</th>
                    <td class="TotalPrecio" colspan="2"></td>
                </tr>
            </tfoot>
            </table>
        </div>
    </header>
<section class="VProducto">
    <div class="VisionProducto">
            <div class="VPImgContainer">
                <img src="IMGs/Doc5.png" class="profile_image">
            </div>
        <div class="Nombre">
            <h2>
                ¿Quienes somos?
            </h2>
        </div>
            <div class="Info">
                <div class="PrecioYStock">
                    <div>
                        <p>Precio</p>
                    </div>
                    <div>
                        <p>Stock</p>
                    </div>
                </div>
                <div class="+Carrito">
                    <div>
                        <p><span class="material-symbols-outlined">Add_Shopping_Cart</span></p>
                    </div>
                </div>
            </div>
    </div>
</section>
    <footer>
        <div class="footer_container">
            <h4>JG</h4>
            <h4>Diseñado y desarrollado por Johan Garcia, con el uso de la imagen y marca de "Cubrimagen" &copy; 2024 - Todos los Derechos Reservados</h4>
        </div>
    </footer>
</div>
</body>
</html>