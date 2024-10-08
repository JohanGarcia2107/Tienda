<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuario</title>
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

                <form class="InSe" action="InsertarUsuario.php" method="post">
                    <h2>Registro de usuarios por medio del ADMIN</h2>
                    <?php if ($Salida!=null) {
                        echo "$Salida";
                        echo "$Salida2";
                    } ?>
                    <label class="TituloForm" for="InsertarUsuarioTipodeUsuario">Tipo de Usuario</label>
                    <select class="SelectForm" name="InsertarUsuarioTipodeUsuario" id="InsertarUsuarioTipodeUsuario">
                        <option class="optionForm" value="2">Visitante</option>
                        <option class="optionForm" value="1">Administrador</option>
                    </select>

                    <label class="TituloForm" for="InsertarUsuarioNombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="InsertarUsuarioNombre" id="InsertarUsuarioNombre" placeholder="Juan Perez" required>

                        <label class="TituloForm" for="InsertarUsuarioEmail">Email</label>
                        <input class="InputForm" type="email" name="InsertarUsuarioEmail" id="InsertarUsuarioEmail" placeholder="example@mail.com" required>

                        <label class="TituloForm" for="InsertarUsuarioTelefono">Telefono</label>
                        <input class="InputForm" type="number" name="InsertarUsuarioTelefono" id="InsertarUsuarioTelefono" placeholder="123456789101" required>
                    
                    <label class="TituloForm" for="InsertarUsuarioContraseña"> Contraseña</label>
                        <input class="InputForm" type="text" name="InsertarUsuarioContraseña" id="InsertarUsuarioContraseña" required>

                        <label class="TituloForm" for="InsertarUsuarioContraseña2"> Vuelve a ingresar tu contraseña</label>
                        <input class="InputForm" type="password" name="InsertarUsuarioContraseña2" id="InsertarUsuarioContraseña2" required>
                    
                    <input class="SendForm" type="submit" value="Registrar" >
                    <div class="Terms">  
                        <a href="#">Acepto los terminos y condiciones</a><input class="Cond" type="checkbox" name="terminos" id="terminos" required>
                    </div>
                    
                        
                </form>

        </div>
    </div>
</div>
</body>
</html>