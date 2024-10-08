<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
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
        <div  class="Logotipo">
            <img class="LogoTipoIMG" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
        </div>
    </header>
    <div class="TableContainer">
        <div class="Tables">
            <table class="Listado">
                <thead class="Encabezados">
                    <tr class="FilaEncabezados">
                        <th class="Encabezado">Id Pedido</th>
                        <th class="Encabezado">Id Factura</th>
                        <th class="Encabezado">Usuario</th>
                        <th class="Encabezado">Monto a Pagar</th>
                        <th class="Encabezado">Fecha</th>
                        <th class="Encabezado">Direccion</th>
                        <th class="Encabezado">Estado</th>
                        <th class="Encabezado">Detalles</th>
                    </tr>
                </thead>
                <tbody class="ContenidoListados">
                    <td class="ItemList">a</td>
                    <td class="ItemList">a</td>
                    <td class="ItemList">a</td>
                    <td class="ItemList">a</td>
                    <td class="ItemList">a</td>
                    <td class="ItemList">a</td>
                    <td class="ItemList">a</td>
                    <td class="BotonDetalles">
                        <a href="Detalles.php">
                            <button class="EstiloBotonDetalles">
                                Ver Detalles
                            </button>
                        </a>
                    </td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>