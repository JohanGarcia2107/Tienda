<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de datos</title>
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
    
                    <form class="InSe" action="" method="post" >

                        <label class="TituloForm" for="ActualizarNombre">Nombre de Usuario</label>
                            <input class="InputForm" type="text" name="ActualizarNombre" id="ActualizarNombre" value="<?php echo $Nombre ?>" readonly>

                        <label class="TituloForm" for="ActualizarEmail">Email</label>
                            <input class="InputForm" type="email" name="ActualizarEmail" id="ActualizarEmail" value="<?php echo $Email ?>" readonly>

                        <label class="TituloForm" for="ActualizarTelefono">Telefono</label>
                            <input class="InputForm" type="number" name="ActualizarTelefono" id="ActualizarTelefono" value="<?php echo $Telefono ?>" required>

                        <label class="TituloForm" for="ActualizarContraseña"> Contraseña</label>
                            <input class="InputForm" type="password" name="ActualizarContraseña" id="ActualizarContraseña" required>

                        <label class="TituloForm" for="ActualizarContraseña2"> Vuelve a ingresar tu contraseña</label>
                            <input class="InputForm" type="password" name="ActualizarContraseña2" id="ActualizarContraseña2" required>
                        
                                <input class="SendForm" type="submit" value="Actualizar" >
                    </form>
            </div>
        </div>
    </div>
    </body>
    </html>