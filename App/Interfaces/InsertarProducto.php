<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
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

                <form class="InSe" method="post" action="InsertarProducto.php" enctype="multipart/form-data">
                    <h2>Nuevo Producto</h2>
                    <?php if ($Salida!=null) {
                        echo "$Salida";
                        echo "$Salida2";
                    } ?>
                    <label class="TituloForm" for="InsertarProductoNombre" >Nombre del Producto</label>
                        <input class="InputForm" type="text" name="InsertarProductoNombre" id="InsertarProductoNombre" placeholder="Figura" required>

                        <label class="TituloForm" for="InsertarProductoImagen">Imagen</label>
                        <input class="InputForm" type="file" name="InsertarProductoImagen" id="InsertarProductoImagen" required>

                        <label class="TituloForm" for="InsertarProductoDescripcion">Descripción</label>
                        <textarea class="InputForm" name="InsertarProductoDescripcion" id="InsertarProductoDescripcion"></textarea>

                        <label class="TituloForm" for="InsertarProductoPrecio">Precio</label>
                        <input class="InputForm" type="number" name="InsertarProductoPrecio" id="InsertarProductoPrecio" placeholder="1000.09" required>

                        <label class="TituloForm" for="InsertarProductoStock">Stock</label>
                        <input class="InputForm" type="number" name="InsertarProductoStock" id="InsertarProductoStock" placeholder="10" required>

                        <label class="TituloForm" for="InsertarProductoCategoria">Categoria</label>
                    <select class="SelectForm" name="InsertarProductoCategoria" id="InsertarProductoCategoria">
                        <option class="optionForm" value="1">Impresiones3d</option>
                        <option class="optionForm" value="2">Forros y parasoles</option>
                    </select>

                    <input class="SendForm" type="submit" value="InsertarProducto" >
                </form>

        </div>
    </div>
</div>
</body>
</html>