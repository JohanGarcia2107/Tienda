<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas</title>
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
                        <th class="Encabezado">IdFactura</th>
                        <th class="Encabezado">Dirección</th>
                        <th class="Encabezado">Medio de pago</th>
                        <th class="Encabezado">Fecha</th>
                        <th class="Encabezado">Total a pagar</th>
                        <th class="Encabezado">Iva</th>
                        <th class="Encabezado">Pago Final</th>
                        <th class="Encabezado">Usuario</th>
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
                    <td class="ItemList">a</td>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>