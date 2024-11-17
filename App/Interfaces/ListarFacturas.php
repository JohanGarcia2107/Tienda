<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Facturas</title>
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
                <form class="BarraBusqueda" action="" method="">
                    <input class="Input_Search" type="search" name="BuscarFacturaAdmin" placeholder="IdFactura o NombreUser">
                    <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
                </form>
                <img class="LogoTipoIMG2" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
            </div>
        </header>
    <div class="TableContainer">
    <?php if ($Aviso!=null) {
        echo $Aviso;
    }?>
        <div class="Tables">
            <table class="Listado">
                <thead class="Encabezados">
                    <tr class="FilaEncabezados">
                        <th class="Encabezado">IdFactura</th>
                        <th class="Encabezado">Dirección</th>
                        <th class="Encabezado">Medio de pago</th>
                        <th class="Encabezado">Fecha de compra</th>
                        <th class="Encabezado">Total a pagar</th>
                        <th class="Encabezado">Iva</th>
                        <th class="Encabezado">Pago Final</th>
                        <th class="Encabezado">Usuario</th>
                    </tr>
                </thead>
                <?php foreach ($ListaFacturaAdmin as $FacAdmin) { ?>
                    <tbody class="ContenidoListados">
                        <td class="ItemList"><?php echo $FacAdmin->GetIdFactura(); ?></td>
                        <td class="ItemList"><?php echo $FacAdmin->GetDireccion(); ?></td>
                        <td class="ItemList"><?php echo $FacAdmin->GetMedioDePago(); ?></td>
                        <td class="ItemList"><?php echo $FacAdmin->GetFecha(); ?></td>
                        <td class="ItemList"><?php echo $FacAdmin->GetTotalAPagar(); ?> COP</td>
                        <td class="ItemList"><?php echo $FacAdmin->GetIVA(); ?></td>
                        <td class="ItemList"><?php echo $FacAdmin->GetTotalAPagarConIVA();?> COP</td>
                        <td class="ItemList"><?php echo $FacAdmin->GetIdUsuario(); ?></td>
                        <td class="BotonDetalles">
                            <a href="Detalles.php?Factura=<?php echo $FacAdmin->GetIdFactura(); ?>">
                                <button class="EstiloBotonDetalles">
                                    Ver Detalles
                                </button>
                            </a>
                        </td>
                    </tbody>
                    <?php } ?>
            </table>
            <?php if (empty($ListaFacturaAdmin)) {?>
                    <div style="margin: auto;" class="data_container">
                        <p style="margin: auto; color:aliceblue" class="Titulo1" >No haz hecho compras</p>
                    </div>
                    <?php } ?>
        </div>
    </div>
</div>
</body>
</html>