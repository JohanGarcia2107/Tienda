<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
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
            <img class="LogoTipoIMG2" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
        <?php if ($_SESSION && isset($_SESSION['CarritoDeComprar'])) { ?>
            <a class="Confirm" href="ConfirmarPedido.php" role="button">
                <div class="Carrito">
                    <span class="material-symbols-outlined CarritoCompra">Shopping_cart</span>
                    <i class="TextoCarrito">Carrito de compra</i>
                </div>
            </a>
        <?php }?>
    </header>
<section class="VProducto">
    <div class="VisionProducto">
        <div class="VPImgContainer">
            <img class="prod_image" src="IMGs/<?php echo $Img; ?>" >
        </div>
        <div class="InfoProd">
            <div class="NombreProd">
                <h2>
                    <?php echo $NombreProd ?>
                </h2>
                <p class="DescripcionProd">
                    <?php echo $Descripcion ?>
                </p>
            </div>
                <div class="Detalles">
                    <div class="PrecioYStock">
                        <div>
                            <p>Precio: <?php echo $Precio ?> COP </p>
                        </div>
                        <div>
                            <p>Stock: <?php echo $Stock ?> Unidades</p>
                        </div>
                    </div>
                    <div >
                        <div>
                            <?php if (!($_SESSION)) { ?>
                                <form class="MasCarrito" action="InicioSesion.php">
                                <input style="padding: 10px;" class="ACarrito" type="submit" value="Inicia Sesion para comprar">
                            </form>
                            <?php }elseif($_SESSION['TipoId']==1){?>
                                <form class="MasCarrito" action="ListarProductos.php">
                                    <input style="padding: 10px;" class="ACarrito" type="submit" value="Administrar">
                                </form>
                            <?php }elseif ($ProductoEnCarrito == true) { ?>
                            <form class="MasCarrito" action="VistaIndividualProd.php?IdProd=<?php echo $IdProd ?>" method="post">
                                    <input type="hidden" name="ProductoABorrar" value="<?php echo $IdProd ?>">
                                <input style="padding: 10px;" class="ACarrito" type="submit" value="Eliminar del Carrito ">
                            </form>
                                <?php }else{ ?>
                            <form class="MasCarrito" action="VistaIndividualProd.php?IdProd=<?php echo $IdProd ?>" method="post">
                                <label for="Cantidad"> Cantidad a comprar
                                    <input type="number" id="Cantidad" name="CantidadAComprar" class="Cantidad" min="1" max="<?php echo $Stock ?>">
                                </label>
                                <input style="padding: 10px;" class="ACarrito" type="submit" value="Añadir al Carrito">
                            </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
    <?php
        require_once("Componentes/Footer.php")
    ?>
</div>
</body>
</html>