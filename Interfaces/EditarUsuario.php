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

            <form class="InSe" action="" method="post">
                <label class="TituloForm" for="IdUsuario">Id Usuario</label>
                    <input class="InputForm" type="number" name="IdUsuario" id="IdUsuario" placeholder="1" readonly>

                    <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Juan Perez">

                    <label class="TituloForm" for="Email">Email</label>
                        <input class="InputForm" type="email" name="Email" id="Email" placeholder="example@mail.com" required>

                    <label class="TituloForm" for="Telefono">Telefono</label>
                        <input class="InputForm" type="number" name="Telefono" id="Telefono" placeholder="123456789101" required>

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