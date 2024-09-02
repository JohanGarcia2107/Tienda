<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" href="IMGs/Logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <?php
        require_once("Componentes/Menu.php");
    ?>
    <div class="Contenido Contenido2">
    <header>
        <h1>CUBRIMAGEN</h1>
        <div  class="Logotipo2">
            <form class="BarraBusqueda" action="ListarProductos.php" method="get">
                <input class="Input_Search" type="search" name="BuscarProductoAdmin" placeholder="Id, Nombre o Categoria...">
                <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
            </form>
            <img class="LogoTipoIMG2" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
    </header>
    <div class="ContenedorInsert">
        <a href="InsertarProducto.php">
            <button class="EstiloBotonInsert">
                Insertar nuevo producto
            </button>
        </a>
    </div>
            <div class="TableContainer">
                <div class="Tables">
                    <table class="Listado">
                        <thead class="Encabezados">
                            <tr class="FilaEncabezados">
                                <th class="Encabezado">IdProducto</th>
                                <th class="Encabezado">Dirección IMG Prod</th>
                                <th class="Encabezado">Nombre</th>
                                <th class="Encabezado">Precio</th>
                                <th class="Encabezado">Stock</th>
                                <th class="Encabezado">Categoria</th>
                                <th class="Encabezado">Actividad</th>
                                <th class="Encabezado">Estado</th>
                                <th class="Encabezado">Editar</th>
                            </tr>
                        </thead>
                        <?php foreach ($ListaProdAdmin as $ProdAdmin) { ?>
                        <tbody class="ContenidoListados">
                            <td class="ItemList"><?php echo $ProdAdmin->GetIdProducto(); ?></td>
                            <td class="ItemList"><img class="IMGListadoProd" src="IMGs/<?php echo $ProdAdmin->GetDirIMGProd(); ?>" alt="Producto sin imagen"></td>
                            <td class="ItemList"><?php echo $ProdAdmin->GetNombreProducto(); ?></td>
                            <td class="ItemList"><?php echo $ProdAdmin->GetPrecio(); ?></td>
                            <td class="ItemList"><?php echo $ProdAdmin->GetStock(); ?></td>
                            <td class="ItemList"><?php echo $ProdAdmin->GetIdCategoria(); ?></td>
                            <td class="ItemList"><?php echo $ProdAdmin->GetActividadId(); ?></td>
                            <td class="BotonDetalles">
                                <a href="ListarProductos.php<?php if ($ProdAdmin->GetActividadId() == "Activo") {?>?DesActivarProd=<?php echo $ProdAdmin->GetIdProducto(); ?><?php }elseif ($ProdAdmin->GetActividadId() == "InActivo") { ?>?ActivarProd=<?php echo $ProdAdmin->GetIdProducto(); ?><?php }?>">
                                    <button class="EstiloBotonDetalles">
                                    <?php if ($ProdAdmin->GetActividadId() == "Activo") {?><?php echo "Desactivar"; ?><?php }else { ?><?php echo "Activar";?><?php }?>
                                    </button>
                                </a>
                            </td>
                            <td class="BotonDetalles">
                                <a href="EditarProductos.php?IdProdAEditar=<?php echo $ProdAdmin->GetIdProducto(); ?>">
                                    <button class="EstiloBotonDetalles">
                                        Editar
                                    </button>
                                </a>
                            </td>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
</div>
</body>
</html>