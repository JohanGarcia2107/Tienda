<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pedidos</title>
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
                    <li class="menu_item"><a href="../Paginas/Productos.php"><span class="material-symbols-outlined">Shopping_cart</span><i>Compra</i></a></li>
                    <li class="menu_item"><a href="../index.php#Contacto"><span class="material-symbols-outlined">Mail</span><i>Contactanos</i></a></li>
                    <li class="menu_item"><a href="../index.php#NuestrosServicios"><span class="material-symbols-outlined">Work</span><i>Nuestros Servicios</i></a></li>
                    <li class="menu_item"><a href="../index.php#NuestrosTrabajos"><span class="material-symbols-outlined">Design_Services</span><i>Nuestros Trabajos</i></a></li>
                </ul>
            </nav>
            <nav class="Menu">
                <ul class="menu_container">
                    <li class="menu_item"><a href="../Paginas/Perfil.php"><span class="material-symbols-outlined">Person</span><i>Perfil</i></a></li>
                    <li class="menu_item"><a href="../Paginas/InicioSesion.php"><span class="material-symbols-outlined">Login</span><i>Iniciar Sesion</i></a></li>
                </ul>
            </nav>
        </div>
    </section>
    <div class="Contenido">
        <header>
            <h1>CUBRIMAGEN</h1>
            <div  class="Logotipo2">
                <form class="BarraBusqueda" action="" method="">
                    <input class="Input_Search" type="search" name="Buscar" placeholder="Buscar...">
                    <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
                </form>
                <img class="LogoTipoIMG2" src="../IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
            </div>
        </header>
        <div class="TableContainer">
            <div class="Tables">
                <table class="Listado">
                    <thead class="Encabezados">
                        <tr class="FilaEncabezados">
                            <th class="Encabezado">Id Pedido</th>
                            <th class="Encabezado">Id Factura</th>
                            <th class="Encabezado">Usuario</th>
                            <th class="Encabezado">Monto a Pagar</th>
                            <th class="Encabezado">Fecha</th>
                            <th class="Encabezado">Direccion</th>
                            <th class="Encabezado">Estado</th>
                            <th class="Encabezado">Detalles</th>
                            <th class="Encabezado">Editar Fecha/Estado</th>
                        </tr>
                    </thead>
                    <tbody class="ContenidoListados">
                        <td class="ItemList">a</td>
                        <td class="ItemList">a</td>
                        <td class="ItemList">a</td>
                        <td class="ItemList">a</td>
                        <td class="ItemList">a</td>
                        <td class="ItemList">a</td>
                        <td class="ItemList">a</td>
                        <td class="BotonDetalles">
                            <a href="../Paginas/Detalles.php">
                                <button class="EstiloBotonDetalles">
                                    Ver Detalles
                                </button>
                            </a>
                        </td>
                        <td class="BotonDetalles">
                            <a href="EditarPedido.php">
                                <button class="EstiloBotonDetalles">
                                    Editar
                                </button>
                            </a>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
</div>
</body>
</html>