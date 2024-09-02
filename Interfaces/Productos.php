<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
        <div  class="Logotipo2">
            <form class="BarraBusqueda" action="Productos.php" method="get">
                <input class="Input_Search" type="search" name="BuscarProducto" placeholder="Buscar...">
                <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
            </form>
            <img class="LogoTipoIMG2" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
        <a class="Confirm" href="ConfirmarPedido.php" role="button">
            <div class="Carrito">
            <span class="material-symbols-outlined CarritoCompra">Shopping_cart</span>
            <i class="TextoCarrito">Carrito de compra</i>
            </div>
        </a>
    </header>
    <section class="Productos">
        <?php foreach ($ListaProdUser as $Prod) {?>
        <div class="ProductosContainer">
            <a class="r" href="VistaIndividualProd.php?IdProd=<?php echo $Prod->GetIdProducto(); ?>">
                <div class="Prod">
                    <div class="P1Prod">
                            <img class="DirIMGProd" src="IMGs/<?php echo $Prod->GetDirIMGProd(); ?>" alt="Producto sin imagen o probelmas de carga" alt="Producto">
                            <p class="NombreProd"><?php echo $Prod->GetNombreProducto(); ?></p>
                    </div>
                    <div class="P2Prod">
                        <p class="Precio">$ <?php echo $Prod->GetPrecio(); ?> COP</p>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </section>
    <?php
        require_once("Componentes/Footer.php")
    ?>
</div>
</body>
</html>