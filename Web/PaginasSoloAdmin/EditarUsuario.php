<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
                <label class="TituloForm" for="IdUsuario">Id Usuario</label>
                    <input class="InputForm" type="number" name="IdUsuario" id="IdUsuario" placeholder="1" readonly>
                    
            </form>

                <form class="InSe" action="">
                    <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Juan Perez">
                        <input class="SendForm" type="submit" value="Actualizar" >
                </form>

                <form class="InSe" action="">
                    <label class="TituloForm" for="Email">Email</label>
                        <input class="InputForm" type="email" name="Email" id="Email" placeholder="example@mail.com" required>
                        <input class="SendForm" type="submit" value="Actualizar" >

                        
                </form>

                <form class="InSe" action="">
                    <label class="TituloForm" for="Telefono">Telefono</label>
                    <input class="InputForm" type="number" name="Telefono" id="Telefono" placeholder="123456789101" required>
                    <input class="SendForm" type="submit" value="Actualizar" >
                        
                </form>

                <form class="InSe" action="">
                    <label class="TituloForm" for="Contraseña"> Contraseña</label>
                        <input class="InputForm" type="text" name="Contraseña" id="Contraseña" required>

                        <label class="TituloForm" for="Contraseña"> Vuelve a ingresar la contraseña</label>
                        <input class="InputForm" type="password" name="Contraseña" id="Contraseña" required>
                    
                    <input class="SendForm" type="submit" value="Actualizar" >
                        
                </form>
                

                        
                    
                    

        </div>
    </div>
</div>
</body>
</html>