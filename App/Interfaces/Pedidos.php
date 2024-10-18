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
        <div  class="Logotipo2">
                <form class="BarraBusqueda" action="ListarPedidos.php" method="get">
                    <input class="Input_Search" type="search" name="BuscarPedido" placeholder="IdFactura...">
                    <button class="Buscar" type="submit"><span class="material-symbols-outlined">search</span></button>
                </form>
                <img class="LogoTipoIMG2" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
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
                        <th class="Encabezado">Fecha de entrega</th>
                        <th class="Encabezado">Direccion</th>
                        <th class="Encabezado">Estado</th>
                        <th class="Encabezado">Detalles</th>
                    </tr>
                </thead>
                <?php foreach ($ListaPed as $Ped) { ?>
                    <tbody class="ContenidoListados">
                        <td class="ItemList"><?php echo $Ped->GetIdPedido(); ?></td>
                        <td class="ItemList"><?php echo $Ped->GetIdFactura(); ?></td>
                        <td class="ItemList"><?php echo $Ped->GetIdUsuario(); ?></td>
                        <td class="ItemList"><?php echo $Ped->GetMontoAPagar(); ?> COP</td>
                        <td class="ItemList"><?php echo $Ped->GetFecha(); ?></td>
                        <td class="ItemList"><?php echo $Ped->GetDireccion(); ?></td>
                        <td class="ItemList"><?php echo $Ped->GetIdEstado(); ?></td>
                        <td class="BotonDetalles">
                            <a href="Detalles.php?Factura=<?php echo $Ped->GetIdFactura(); ?>">
                                <button class="EstiloBotonDetalles">
                                    Ver Detalles
                                </button>
                            </a>
                        </td>
                    </tbody>
                    <?php } ?>
            </table>
            <?php if (empty($ListaPed)) {?>
                    <div style="margin: auto;" class="data_container">
                        <p style="margin: auto; color:aliceblue" class="Titulo1" >No haz hecho compras</p>
                    </div>
                    <?php } ?>
        </div>
    </div>
</div>
</body>
</html>