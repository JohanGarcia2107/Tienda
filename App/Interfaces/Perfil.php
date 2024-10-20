<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="IMGs/Logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <?php
        require_once("Componentes/Menu.php");
    ?>
    <div class="Contenido">
    <header>
        <h1>CUBRIMAGEN</h1>
        <div  class="Logotipo">
            <img class="LogoTipoIMG" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
    </header>
    <div class="InicioSesionContainer">
        <div class="InicioDeSesion">

                <form class="InSe">
                    <h2>Tus Datos</h2>
                    <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="Nombre" id="Nombre" value="<?php echo $Nombre ?>" readonly>

                        <label class="TituloForm" for="Email">Email</label>
                        <input class="InputForm" type="email" name="Email" id="Email" value="<?php echo $Email ?>" readonly>

                        <label class="TituloForm" for="Telefono">Telefono</label>
                        <input class="InputForm" type="number" name="Telefono" id="Telefono" value="<?php echo $Telefono ?>" readonly>
                    
                    
                </form>

                <div class="Botones">
                    <?php if ($_SESSION['TipoId']==1) { ?>
                        <a href="ActualizarDatos.php">
                            <button class="ActualizarDatos">Actualizar Datos</button>
                        </a>
                        <a href="ListarProductos.php">
                        <button class="ActualizarDatos">Productos</button>
                        </a>
                        <a href="ListarUsuarios.php">
                        <button class="ActualizarDatos">Usuarios</button>
                        </a>
                        <a href="ListarFacturas.php">
                        <button class="ActualizarDatos">Facturas</button>
                        </a>
                        <a href="ListarPedidos.php">
                        <button class="ActualizarDatos">Pedidos</button>
                        </a>
                    <?php } ?>

                    <?php if ($_SESSION['TipoId']==2) { ?>
                        <a href="ActualizarDatos.php">
                            <button class="ActualizarDatos">Actualizar Datos</button>
                        </a>
                        <a href="Facturas.php">
                            <button class="ActualizarDatos">Facturas</button>
                        </a>
                        <a href="Pedidos.php">
                            <button class="ActualizarDatos">Pedidos</button>
                        </a>
                    <?php } ?>

                </div>
        </div>
    </div>
</div>
</body>
</html>