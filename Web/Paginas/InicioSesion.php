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
    <?php
        require_once("Componentes/Menu.php");
    ?>
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
                    <h2>Inicio de sesión</h2>
                    
                    <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Juan Perez" required>
                    
                    <label class="TituloForm" for="Contraseña"> Contraseña</label>
                        <input class="InputForm" type="password" name="Contraseña" id="Contraseña" required>
                    
                    <input class="SendForm" type="submit" value="Iniciar Sesion" >

                    <p><a class="Reg" href="Registro.php">¿No tienes una cuenta?, Crea una Aqui</a></p>
                </form>

        </div>
    </div>
</div>
</body>
</html>