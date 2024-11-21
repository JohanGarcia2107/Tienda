-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2024 a las 23:12:43
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `IdActividad` int(11) NOT NULL,
  `NombreCtividad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`IdActividad`, `NombreCtividad`) VALUES
(1, 'Activo'),
(2, 'InActivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `IdCategoria` int(11) NOT NULL,
  `NombreCategoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`IdCategoria`, `NombreCategoria`) VALUES
(1, 'Impresiones3d'),
(2, 'Forros y parasoles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `IdProducto` int(11) NOT NULL,
  `Precio` decimal(10,0) DEFAULT NULL,
  `Cantidad` int(11) NOT NULL,
  `PrecioTotal` decimal(10,0) DEFAULT (`Cantidad` * `Precio`),
  `IdFactura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`IdProducto`, `Precio`, `Cantidad`, `PrecioTotal`, `IdFactura`) VALUES
(3, 6000, 2, 12000, 1),
(1, 5001, 4, 20004, 1),
(3, 6000, 1, 6000, 2),
(5, 5001, 2, 10002, 3),
(2, 10501, 4, 42004, 2),
(3, 8000, 3, 24000, 9),
(6, 5000, 2, 10000, 9),
(3, 8000, 5, 40000, 10),
(1, 5001, 2, 10002, 11),
(3, 8000, 3, 24000, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopedidos`
--

CREATE TABLE `estadopedidos` (
  `IdEstado` int(11) NOT NULL,
  `NombreEstado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estadopedidos`
--

INSERT INTO `estadopedidos` (`IdEstado`, `NombreEstado`) VALUES
(1, 'Pendiente'),
(2, 'Entregado'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `IdFactura` int(11) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `MedioDePago` varchar(20) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `TotalAPagar` decimal(10,0) DEFAULT NULL,
  `IVA` float DEFAULT 1.21,
  `PagoFinal` decimal(10,0) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`IdFactura`, `Direccion`, `MedioDePago`, `Fecha`, `TotalAPagar`, `IVA`, `PagoFinal`, `IdUsuario`) VALUES
(1, 'Carrera 55 No. 2B-59, Bogotá, Bogotá D.C.', 'ContraEntrega', '2024-06-12', 32004, 1.21, 38725, 2),
(2, 'Carrera 6 No. 22-17 SUR, Bogotá, Bogotá D.C', 'Credito', '2024-06-12', 48004, 1.21, 58085, 5),
(3, 'Avenida 7 No. 154-56, Bogotá, Bogotá D.C.', 'ContraEntrega', '2024-06-12', 10002, 1.21, 12102, 7),
(9, 'Calle 3456789fhhsjdjd', 'Contra Entrega', '2024-10-29', 34000, 1.21, 41140, 36),
(10, 'Calle 3456789fhhsjdjd', 'Contra Entrega', '2024-11-14', 40000, 1.21, 48400, 36),
(11, 'Calle 3456789fhhsjdjd', 'Contra Entrega', '2024-11-21', 34002, 1.21, 41142, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `IdPedido` int(11) NOT NULL,
  `IdFactura` int(11) DEFAULT NULL,
  `IdUser` int(11) DEFAULT NULL,
  `MontoAPagar` decimal(10,0) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Estado` int(11) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`IdPedido`, `IdFactura`, `IdUser`, `MontoAPagar`, `Fecha`, `Direccion`, `Estado`) VALUES
(1, 1, 2, 38725, '2024-07-25', 'Carrera 54 No. 2B-59, Bogotá, Bogotá D.C.', 3),
(2, 2, 5, 58085, '2024-10-20', 'Carrera 6 No. 22-17 SUR, Bogotá', 3),
(3, 3, 7, 12102, '2024-06-01', 'Avenida 7 No. 154-56, Bogotá, Bogotá D.C.', 2),
(9, 9, 36, 41140, '2024-11-28', 'Calle 3456789fhhsjdjd', 1),
(10, 10, 36, 48400, '2024-12-14', 'Calle 3456789fhhsj', 1),
(11, 11, 39, 41142, '2024-12-21', 'Calle 3456789fhhsjdjd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(11) NOT NULL,
  `DireccionIMGProd` varchar(150) DEFAULT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Precio` decimal(10,0) NOT NULL,
  `Stock` int(11) NOT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `IdActividad` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `DireccionIMGProd`, `Nombre`, `Descripcion`, `Precio`, `Stock`, `IdCategoria`, `IdActividad`) VALUES
(1, '1729454390_3d.jpg', 'Atrapasueños', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus unde odit fuga inventore asperiores magni deserunt reiciendis sit quae ea. Laudantium inventore tenetur similique laborum consequunt', 5001, 4, 1, 1),
(2, '1729454469_Imagen-de-publicación-de-Patreon.jpg', 'Figura Luis diaz', 'Asistencia', 10501, 1, 1, 1),
(3, '1729454633_WhatsApp-Image-2023-01-23-at-13.20.35-5.jpeg', 'Alcancia', 'Alcancia', 8000, 4, 1, 1),
(4, '1729454989_e06cc58a66ba85d4f64879a6aeb0f63d_fit.jpg', 'Posillo personalizado', 'Posillo personalizada', 10000, 4, 2, 1),
(5, '1729455001_eab4417bc747889fe89d07fc74b19b6b_fit.jpg', 'Sombrilla perzonalizada', 'Pal sol', 15200, 4, 2, 1),
(6, '1729455088_366876b6c6eabb93c9ded0b45bf07f06_fit.jpg', 'Tapabocas estampado', 'Tapabocas con diseño personalizado para darle un toque diferencial y evitar enfermedades', 5000, 2, 2, 1),
(8, '1729455242_1.jpg', 'Copa de la champions', 'Copa de la champions tambien llamada liga de campeones impresa en 3d', 1000, 4, 1, 1),
(9, '1731621660_GB_YszEXIAAYfhC.jpg', 'fifa', 'camiseta del fifa', 10000, 1, 2, 1),
(10, '1726159711_GI1b0aLWIAAx1Ng.jpeg', 'Manguera', 'Para regar campos', 90000, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuarios`
--

CREATE TABLE `tipousuarios` (
  `IdTipo` int(11) NOT NULL,
  `NombreTipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipousuarios`
--

INSERT INTO `tipousuarios` (`IdTipo`, `NombreTipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `IdTipo` int(11) DEFAULT 2,
  `IdActividad` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUsuario`, `Nombre`, `Email`, `Telefono`, `Contrasena`, `IdTipo`, `IdActividad`) VALUES
(1, 'Aureliano', 'juan.perez1987@gmail.com', '3229138816', 'd8050564371b1765d4e5472566fcbde51a4f6687', 1, 1),
(2, 'Laura Gonzales', 'laura.gonzalez2000@hotmail.com', '3286547934', 'c797e239af939da547a8a1df27cb9886b00a4c55', 2, 1),
(3, 'Carlos Rodrigez', 'carlos.rodriguez_23@yahoo.com', '2345678', '798bdc578daf07cb9df9815c0896b4f4dd232c16', 2, 1),
(5, 'David Sanchez', 'david.sanchez_45@gmail.com', '3167890456', 'a30ba5d803a94cb6e4c8b8566500107a479fadf0', 2, 2),
(7, 'Pedro Perez', 'pedro.garcia_12@hotmail.com', '3479865431', '34f5affe5a210bf357b43779ee0b89927bb34dec', 2, 1),
(36, 'Paquito', 'jdavid3mon@gmail.com', '23456789', '5c679dad8c267de1f5ad10beec7b4fbeb9d5450f', 2, 1),
(39, 'Kevin', 'jdavid3mon2@gmail.com', '123456789', '5c679dad8c267de1f5ad10beec7b4fbeb9d5450f', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`IdActividad`),
  ADD UNIQUE KEY `NombreCtividad` (`NombreCtividad`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`IdCategoria`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD KEY `IdProducto` (`IdProducto`),
  ADD KEY `IdFactura` (`IdFactura`);

--
-- Indices de la tabla `estadopedidos`
--
ALTER TABLE `estadopedidos`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`IdFactura`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`IdPedido`),
  ADD KEY `Estado` (`Estado`),
  ADD KEY `IdFactura` (`IdFactura`),
  ADD KEY `IdUser` (`IdUser`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`),
  ADD KEY `IdCategoria` (`IdCategoria`),
  ADD KEY `IdActividad` (`IdActividad`);

--
-- Indices de la tabla `tipousuarios`
--
ALTER TABLE `tipousuarios`
  ADD PRIMARY KEY (`IdTipo`),
  ADD UNIQUE KEY `NombreTipo` (`NombreTipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD UNIQUE KEY `IdUsuario` (`IdUsuario`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `IdTipo` (`IdTipo`),
  ADD KEY `IdActividad` (`IdActividad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `IdActividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estadopedidos`
--
ALTER TABLE `estadopedidos`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `IdFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `IdPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IdProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipousuarios`
--
ALTER TABLE `tipousuarios`
  MODIFY `IdTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `detallefactura_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`IdProducto`),
  ADD CONSTRAINT `detallefactura_ibfk_2` FOREIGN KEY (`IdFactura`) REFERENCES `factura` (`IdFactura`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`Estado`) REFERENCES `estadopedidos` (`IdEstado`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`IdFactura`) REFERENCES `factura` (`IdFactura`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`IdUser`) REFERENCES `usuarios` (`IdUsuario`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`IdCategoria`) REFERENCES `categorias` (`IdCategoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`IdActividad`) REFERENCES `actividad` (`IdActividad`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`IdTipo`) REFERENCES `tipousuarios` (`IdTipo`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`IdActividad`) REFERENCES `actividad` (`IdActividad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
