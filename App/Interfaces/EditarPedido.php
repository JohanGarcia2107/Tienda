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
                <form class="InSe" action="">
                    <label class="TituloForm" for="IdPedido">Id Pedido</label>
                        <input class="InputForm" type="number" name="IdPedido" id="IdPedido" placeholder="1" readonly>

                        <label class="TituloForm" for="IdFactura">Id Factura</label>
                        <input class="InputForm" type="number" name="IdFactura" id="IdFactura" placeholder="1" readonly>

                        <label class="TituloForm" for="Nombre">Nombre de Usuario</label>
                        <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Figura" readonly>

                        <label class="TituloForm" for="MontoAPagar">Monto a Pagar</label>
                            <input class="InputForm" type="number" name="MontoAPagar" id="MontoAPagar" placeholder="1000.0" readonly>

                        <label class="TituloForm" for="Fecha">Fecha</label>
                            <input class="InputForm" type="date" name="Fecha" id="Fecha" required>

                        <label class="TituloForm" for="Nombre">Direccion</label>
                            <input class="InputForm" type="text" name="Nombre" id="Nombre" placeholder="Calle 10#17">

                        <label class="TituloForm" for="Tipo_de_Usuario">Estado</label>
                            <select class="SelectForm" name="Estado" id="Estado">
                                <option class="optionForm" value="1">Pendiente</option>
                                <option class="optionForm" value="2">Entregado</option>
                                <option class="optionForm" value="3">Cancelado</option>
                            </select>

                        <input class="SendForm" type="submit" value="Actualizar" >

                </form>
            </div>
        </div>
    </div>
</body>
</html>