<section class="Side_bar">
        <div class="menus_container">
            <div class="logo_container">
                    <img src="IMGs/Logo.png" class="logo" alt="logo">
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
                <?php if ($_SESSION) { ?>
                        <li class="menu_item"><a href="Perfil.php"><span class="material-symbols-outlined">Person</span><i>Perfil</i></a></li>
                        <li class="menu_item"><a href="CerrarSesion.php"><span class="material-symbols-outlined">Logout</span><i>Cerrar Sesión</i></a></li>
                    <?php }else { ?>
                        <li class="menu_item"><a href="InicioSesion.php"><span class="material-symbols-outlined">Login</span><i>Iniciar Sesión</i></a></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </section>