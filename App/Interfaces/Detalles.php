<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
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
                        <th class="Encabezado">Nombre</th>
                        <th class="Encabezado">Precio</th>
                        <th class="Encabezado">Cantidad</th>
                        <th class="Encabezado">Precio Total</th>
                        <th class="Encabezado">Id Factura</th>
                    </tr>
                </thead>
                <?php foreach ($ListaDetalles as $Detalle) { ?>
                    <tbody class="ContenidoListados">
                        <td class="ItemList"><?php echo $Detalle->GetIdProducto(); ?></td>
                        <td class="ItemList"><?php echo $Detalle->GetPrecio(); ?></td>
                        <td class="ItemList"><?php echo $Detalle->GetCantidad(); ?></td>
                        <td class="ItemList"><?php echo $Detalle->GetPrecioTotal(); ?></td>
                        <td class="ItemList"><?php echo $Detalle->GetIdFactura(); ?></td>
                    </tbody>
                    <?php } ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>