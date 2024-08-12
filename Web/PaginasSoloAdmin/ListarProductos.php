<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="icon" href="../IMGs/Logo.png" type="image/png">
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
            <form class="BarraBusqueda" action="" method="">
                <input class="Input_Search" type="search" name="Buscar" placeholder="Buscar...">
                <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
            </form>
            <img class="LogoTipoIMG2" src="../IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
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
                                <th class="Encabezado">Editar</th>
                                <th class="Encabezado">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody class="ContenidoListados">
                            <td class="ItemList">a</td>
                            <td class="ItemList">a</td>
                            <td class="ItemList">a</td>
                            <td class="ItemList">a</td>
                            <td class="ItemList">a</td>
                            <td class="BotonDetalles">
                                <a href="EditarProductos.php">
                                    <button class="EstiloBotonDetalles">
                                        Editar
                                    </button>
                                </a>
                            </td>
                            <td class="BotonDetalles">
                                    <button class="EstiloBotonDetalles">
                                        Desactivar
                                    </button>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
</div>
</body>
</html>