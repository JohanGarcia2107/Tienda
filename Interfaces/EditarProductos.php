<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion Productos</title>
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
                <form class="InSe" action="">
                    <label class="TituloForm" for="IdProducto">Id Producto</label>
                        <input class="InputForm" type="number" name="IdProducto" id="IdProducto" placeholder="1" readonly>

                        <label class="TituloForm" for="Nombre">Nombre de Producto</label>
                            <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Figura">

                        <label class="TituloForm" for="Imagen">Imagen</label>
                            <input class="InputForm" type="file" name="Imagen" id="Imagen" placeholder="example@mail.com" required>

                        <label class="TituloForm" for="Descripcion">Descripción</label>
                            <textarea class="InputForm" name="Descripcion" id="Descripcion"></textarea>

                        <label class="TituloForm" for="Precio">Precio</label>
                            <input class="InputForm" type="number" name="Precio" id="Telefono" placeholder="1000.09" required>

                            <label class="TituloForm" for="Stock">Stock</label>
                        <input class="InputForm" type="number" name="Precio" id="Telefono" placeholder="10" required>
                        <input class="SendForm" type="submit" value="Actualizar" >

                </form>
            </div>
        </div>
    </div>
</body>
</html>