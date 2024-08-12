<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Usuario</title>
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
                    <h2>Registro de usuarios por medio del ADMIN</h2>
                    <label class="TituloForm" for="Tipo_de_Usuario">Tipo de Usuario</label>
                    <select class="SelectForm" name="Tipo_de_Usuario" id="Tipo_de_Usuario">
                        <option class="optionForm" value="Visitante">Visitante</option>
                        <option class="optionForm" value="Administrador">Administrador</option>
                    </select>

                    <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Juan Perez" required>

                        <label class="TituloForm" for="Email">Email</label>
                        <input class="InputForm" type="email" name="Email" id="Email" placeholder="example@mail.com" required>

                        <label class="TituloForm" for="Telefono">Telefono</label>
                        <input class="InputForm" type="number" name="Telefono" id="Telefono" placeholder="123456789101" required>
                    
                    <label class="TituloForm" for="Contraseña"> Contraseña</label>
                        <input class="InputForm" type="text" name="Contraseña" id="Contraseña" required>

                        <label class="TituloForm" for="Contraseña"> Vuelve a ingresar tu contraseña</label>
                        <input class="InputForm" type="password" name="Contraseña" id="Contraseña" required>
                    
                    <input class="SendForm" type="submit" value="Registrar" >
                    <div class="Terms">  
                        <a href="#">Acepto los terminos y condiciones</a><input class="Cond" type="checkbox" name="terminos" id="terminos">
                    </div>
                    
                        
                </form>

        </div>
    </div>
</div>
</body>
</html>