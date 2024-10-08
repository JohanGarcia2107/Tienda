<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="IMGs/Logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    
    <div class="Contenido">
    <header>
        <h1>CUBRIMAGEN</h1>
        <div  class="Logotipo">
            <img class="LogoTipoIMG" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
    </header>
    <div class="InicioSesionContainer">
        <div class="InicioDeSesion">
                <form class="InSe" action="Registro.php" method="post">
                    <h2>Registro</h2>
                    <?php if ($Salida!=null) {
                        echo "$Salida";
                        echo "$Salida2";
                    } ?>
                    <label class="TituloForm" for="NombreRegistro">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="NombreRegistro" id="NombreRegistro" placeholder="Juan Perez" required>

                        <label class="TituloForm" for="EmailRegistro">Email</label>
                        <input class="InputForm" type="email" name="EmailRegistro" id="EmailRegistro" placeholder="example@mail.com" required>

                        <label class="TituloForm" for="TelefonoRegistro">Telefono</label>
                        <input class="InputForm" type="number" name="TelefonoRegistro" id="TelefonoRegistro" placeholder="123456789101" required>
                    
                    <label class="TituloForm" for="ContraseñaRegistro"> Contraseña</label>
                        <input class="InputForm" type="password" name="ContraseñaRegistro" id="ContraseñaRegistro" required>

                        <label class="TituloForm" for="ContraseñaRegistro"> Vuelve a ingresar tu contraseña</label>
                        <input class="InputForm" type="password" name="Contraseña2Registro" id="ContraseñaRegistro" required>
                    
                    <input class="SendForm" type="submit" value="Registrarse" >
                    <div class="Terms">  
                        <a href="#">Acepto los terminos y condiciones</a><input class="Cond" required type="checkbox" name="terminos" id="terminos">
                    </div>
                    <p>
                        ¿Ya tienes una cuenta? <a href="InicioSesion.php">Inicia sesión</a>
                    </p>
                </form>
        </div>
    </div>
</div>
</body>
</html>