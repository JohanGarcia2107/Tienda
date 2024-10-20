<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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

            <form class="InSe" action="EditarUsuario.php?IdUsuario=<?php echo $IdUser; ?>" method="post">
                <h2>Editar Usuario</h2>
                <label class="TituloForm" for="EditarUsuarioIdUsuario">Id Usuario</label>
                    <input class="InputForm" type="number" name="EditarUsuarioIdUsuario" id="EditarUsuarioIdUsuario" value="<?php echo $IdUser; ?>" readonly>

                    <label class="TituloForm" for="EditarUsuarioNombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="EditarUsuarioNombre" id="EditarUsuarioNombre" value="<?php echo $Nombre; ?>">

                    <label class="TituloForm" for="EditarUsuarioEmail">Email</label>
                        <input class="InputForm" type="email" name="EditarUsuarioEmail" id="EditarUsuarioEmail" value="<?php echo $Email; ?>" readonly>

                    <label class="TituloForm" for="EditarUsuarioTelefono">Telefono</label>
                        <input class="InputForm" type="number" name="EditarUsuarioTelefono" id="EditarUsuarioTelefono" value="<?php echo $Telefono; ?>">
                    
                    <input class="SendForm" type="submit" value="Actualizar" >
                    
            </form>
        </div>
    </div>
</div>
</body>
</html>