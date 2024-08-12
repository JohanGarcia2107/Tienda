<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
        <div  class="Logotipo2">
            <form class="BarraBusqueda" action="" method="">
                <input class="Input_Search" type="search" name="Buscar" placeholder="Buscar...">
                <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
            </form>
            <img class="LogoTipoIMG2" src="../IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
        <a class="Confirm" href="ConfirmarPedido.php" role="button">
            <div class="Carrito">
            <span class="material-symbols-outlined CarritoCompra">Shopping_cart</span>
            <i class="TextoCarrito">Carrito de compra</i>
            </div>
        </a>
    </header>
    <section class="Productos">
        <div class="ProductosContainer">
            <a class="r" href="VistaIndividualProd.php">
                <div class="Prod">
                    <div class="P1Prod">
                            <img class="DirIMGProd" src="../IMGs/1.jpg" alt="Producto">
                            <p class="NombreProd">Copa Champions</p>
                    </div>
                    <div class="P2Prod">
                        <p class="Precio">Precio</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="ProductosContainer">
            <a class="r" href="VistaIndividualProd.php">
                <div class="Prod">
                    <div class="P1Prod">
                            <img class="DirIMGProd" src="../IMGs/1.jpg" alt="Producto">
                            <p class="NombreProd">Copa Champions</p>
                    </div>
                    <div class="P2Prod">
                        <p class="Precio">Precio</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="ProductosContainer">
            <a class="r" href="VistaIndividualProd.php">
                <div class="Prod">
                    <div class="P1Prod">
                            <img class="DirIMGProd" src="../IMGs/1.jpg" alt="Producto">
                            <p class="NombreProd">Copa Champions</p>
                    </div>
                    <div class="P2Prod">
                        <p class="Precio">Precio</p>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <?php
        require_once("Componentes/Footer.php")
    ?>
</div>
</body>
</html>