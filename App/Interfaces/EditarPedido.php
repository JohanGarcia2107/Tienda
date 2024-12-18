<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion Pedido</title>
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
            <h1>CUBRIMAGEN</h1>
            <div  class="Logotipo">
                <img class="LogoTipoIMG" src="IMGs/LogoTexto.png" alt="Logotipo_Cubrimagen">
            </div>
        </header>
        <div class="InicioSesionContainer">
            <div class="InicioDeSesion">
                <form class="InSe" action="EditarPedido.php?Pedido=<?php echo $IdPedido ?>" method="post">
                    <?php if ($Salida!=null) {
                        echo "$Salida";
                        echo "$Salida2";
                    } ?>
                    <label class="TituloForm" for="IdPedido">Id Pedido</label>
                        <input class="InputForm" type="number" name="IdPedido" id="IdPedido" value="<?php echo $IdPedido ?>" readonly>

                        <label class="TituloForm" for="IdFactura">Id Factura</label>
                        <input class="InputForm" type="number" name="IdFactura" id="IdFactura" value="<?php echo $IdFactura ?>" readonly>

                        <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="Nombre" id="Nombre" value="<?php echo $Nombre ?>" readonly>

                        <label class="TituloForm" for="MontoAPagar">Monto a Pagar</label>
                            <input class="InputForm" type="number" name="MontoAPagar" id="MontoAPagar" value="<?php echo $MontoAPagar ?>" readonly>

                        <label class="TituloForm" for="Fecha">Fecha de Entrega</label>
                            <input class="InputForm" type="date" name="Fecha" id="Fecha" value="<?php echo $Fecha ?>" required>

                        <label class="TituloForm" for="Direccion">Direccion</label>
                            <input class="InputForm" type="text" name="Direccion" id="Direccion" value="<?php echo $Direccion ?>">

                        <label class="TituloForm" for="Tipo_de_Usuario">Estado</label>
                            <select class="SelectForm" name="Estado" id="Estado">
                                <option class="optionForm" value="1" <?php if ($Estado==1) {echo "Selected";}?>>Pendiente</option>
                                <option class="optionForm" value="2" <?php if ($Estado==2) {echo "Selected";}?>>Entregado</option>
                                <option class="optionForm" value="3" <?php if ($Estado==3) {echo "Selected";}?>>Cancelado</option>
                            </select>

                        <input class="SendForm" type="submit" value="Actualizar" >

                </form>
            </div>
        </div>
    </div>
</body>
</html>