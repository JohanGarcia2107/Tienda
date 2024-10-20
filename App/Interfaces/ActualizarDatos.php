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
    
                    <form class="InSe" action="ActualizarDatos.php" method="post" >
                        <h2>Actualizar Datos</h2>
                        <?php if ($Salida!=null) {
                        echo "$Salida";
                        echo "$Salida2";
                    } ?>

                        <label class="TituloForm" for="ActualizarNombre">Nombre de Usuario</label>
                            <input class="InputForm" type="text" name="ActualizarNombre" id="ActualizarNombre" value="<?php echo $Nombre ?>">

                        <label class="TituloForm" for="ActualizarEmail">Email</label>
                            <input class="InputForm" type="email" name="ActualizarEmail" id="ActualizarEmail" value="<?php echo $Email ?>" readonly>

                        <label class="TituloForm" for="ActualizarTelefono">Telefono</label>
                            <input class="InputForm" type="number" name="ActualizarTelefono" id="ActualizarTelefono" value="<?php echo $Telefono ?>">
                        
                                <input class="SendForm" type="submit" value="Actualizar" >
                    </form>

                    <form class="InSe" action="ActualizarDatos.php" method="post" >
                        <h2>Actualizar Contraseña</h2>

                        <?php if ($Salida3!=null) {
                        echo "$Salida3";
                        echo "$Salida4";
                    } ?>

                        <label class="TituloForm" for="ContrasenaActual">Contraseña  Actual</label>
                            <input class="InputForm" type="password" name="ContrasenaActual" id="ContrasenaActual" required>

                        <label class="TituloForm" for="ContrasenaNueva">Contraseña Nueva</label>
                            <input class="InputForm" type="password" name="ContrasenaNueva" id="ContrasenaNueva" minlength="8" required>

                        <label class="TituloForm" for="ContrasenaNueva2">Repita la contraseña nueva</label>
                            <input class="InputForm" type="password" name="ContrasenaNueva2" id="ContrasenaNueva2" minlength="8" required>
                            <p class="valid">La contraseña debe contener un minimo de 8 caracteres</p>
                        
                                <input class="SendForm" type="submit" value="Actualizar" >
                    </form>
            </div>
        </div>
    </div>
    </body>
    </html>