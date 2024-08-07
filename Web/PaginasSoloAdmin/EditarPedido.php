<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion Pedido</title>
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
            <div  class="Logotipo">
                <img class="LogoTipoIMG" src="../IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
            </div>
        </header>
        <div class="InicioSesionContainer">
            <div class="InicioDeSesion">
                <form class="InSe" action="">
                    <label class="TituloForm" for="IdPedido">Id Pedido</label>
                        <input class="InputForm" type="number" name="IdPedido" id="IdPedido" placeholder="1" readonly>
                </form>
                <form class="InSe" action="">
                    <label class="TituloForm" for="IdFactura">Id Factura</label>
                        <input class="InputForm" type="number" name="IdFactura" id="IdFactura" placeholder="1" readonly>
                </form>


                    <form class="InSe" action="">
                        <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                            <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Figura" readonly>
                    </form>

                    <form class="InSe" action="">
                        <label class="TituloForm" for="MontoAPagar">Monto a Pagar</label>
                            <input class="InputForm" type="number" name="MontoAPagar" id="MontoAPagar" placeholder="1000.0" readonly>
                    </form>

                    <form class="InSe" action="">
                        <label class="TituloForm" for="Fecha">Fecha</label>
                        <input class="InputForm" type="date" name="Fecha" id="Fecha" required>
                        <input class="SendForm" type="submit" value="Actualizar" >
                    </form>

                    <form class="InSe" action="">
                        <label class="TituloForm" for="Nombre">Direccion</label>
                            <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Calle 10#17" readonly>
                    </form>

                    <form class="InSe" action="">
                        <label class="TituloForm" for="Tipo_de_Usuario">Estado</label>
                    <select class="SelectForm" name="Estado" id="Estado">
                        <option class="optionForm" value="1">Pendiente</option>
                        <option class="optionForm" value="2">Entregado</option>
                        <option class="optionForm" value="3">Cancelado</option>
                    </select>
                        <input class="SendForm" type="submit" value="Actualizar" >
                            
                    </form>
            </div>
        </div>
    </div>
</body>
</html>