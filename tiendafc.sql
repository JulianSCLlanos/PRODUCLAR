-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2019 a las 20:40:53
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendafc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `apellido` varchar(300) NOT NULL,
  `correo` varchar(300) NOT NULL,
  `nivel` int(11) NOT NULL,
  `pw` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido`, `correo`, `nivel`, `pw`) VALUES
(1, 'yonathan', 'suarez', 'yond1994@gmail.com', 1, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `qty` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codCli` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `pas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codCli`, `nombre`, `correo`, `pas`) VALUES
(3, 'Jose Perez', 'jose@gmail.com', 'abc123'),
(4, 'Ana Diaz', 'ana@gmail.com', '111111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `numPedido` int(11) NOT NULL,
  `codpro` int(11) NOT NULL,
  `can` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`numPedido`, `codpro`, `can`) VALUES
(1, 21, 2),
(1, 20, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `numPedido` int(11) NOT NULL,
  `contador` int(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`numPedido`, `contador`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codpro` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `Tamaño` varchar(30) CHARACTER SET latin1 NOT NULL,
  `detalle` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codpro`, `descripcion`, `precio`, `stock`, `Tamaño`, `detalle`, `imagen`) VALUES
(20, 'Garrafa aceite de Ajonjol&iacute', 307020, 14, '20 L', 'Extra&iacutedo de la semilla de Ajonjol&iacute', '20.jpg'),
(21, 'Garrafa aceite de Ajonjol&iacute de 5000CC', 79135, 5, '5.000 CC', 'Extra&iacutedo de la semilla de Ajonjol&iacute', '21.jpg'),
(22, 'Garrafa aceite de Ajonjol&iacute de 3000CC\r\n', 49385, 9, '3.000 CC', 'Extra&iacutedo de la semilla de Ajonjol&iacute', '22.jpg'),
(23, 'Frasco aceite de Ajonjol&iacute de 1000CC', 16660, 9, '1.000 CC', 'Extra&iacutedo de la semilla de Ajonjol&iacute', '23.jpg'),
(24, 'Frasco aceite de Ajonjol&iacute de 500CC', 8925, 0, '500 CC', 'Extra&iacutedo de la semilla de Ajonjol&iacute', '24.jpg'),
(25, 'Garrafa de aceite de Coco de 20 L', 916300, 16, '20 L', 'Extra&iacutedo de la pulpa de coco deshidratado', '25.jpg'),
(26, 'Garrafa de aceite de Coco de 10 L', 464100, 7, '10 L', 'Extra&iacutedo de la pulpa de coco deshidratado', '26.jpg'),
(27, 'Garrafa de aceite de Coco de 5000CC', 233240, 8, '5.000 CC', 'Extra&iacutedo de la pulpa de coco deshidratado', '27.jpg'),
(28, 'Garrafa de aceite de Girasol ', 121275, 10, '3.000 CC', 'Extraído de las semillas de\r\ngirasol (Hellantus annus).', '28.jpg'),
(29, 'Frasco aceite de Coco boca angosta', 49028, 11, '1.000 CC', 'Extra&iacutedo de la pulpa de coco deshidratado.', '29.jpg'),
(30, 'Frasco aceite de coco de 1000CC', 51765, 20, '1.000 CC', 'Extra&iacutedo de la pulpa de coco deshidratado.', '30.jpg'),
(31, 'Frasco aceite de Coco de 500CC', 26775, 15, '500 CC', 'Extra&iacutedo de la pulpa de coco deshidratado', '31.jpg'),
(32, 'Frasco aceite de coco de 250CC', 15470, 20, '250 CC', 'Extra&iacutedo de la pulpa de coco deshidratado', '32.jpg'),
(34, 'Garrafa aceite de linaza de 5000CC', 157675, 14, '5.000 CC', 'Se obtiene de las semillas de linaza. Es una fuente vegetal natural m&aacutes importante del &aacutecido graso  alfa linol&eacutenico\r\n(ALA) correspondiente al\r\ntipo OMEGA-3 y OMEGA-6. ', '34.jpg'),
(35, 'Garrafa aceite de linaza de 3000CC', 96390, 15, '3.000 CC', 'Se obtiene de las semillas de linaza. Es una fuente vegetal natural m&aacutes importante del &aacutecido graso  alfa linol&eacutenico\r\n(ALA) correspondiente al\r\ntipo OMEGA-3 y OMEGA-6. ', '35.jpg'),
(36, 'Frasco aceite de nuez de brasil', 11900, 20, '250 CC', 'Extra&iacutedo de la nuez de\r\nBrasil, se conoce\r\ntambién como Castaña\r\n(bertholletia excelsa)\r\nen estado crudo.', '36.jpg'),
(37, 'Frasco aceite de linaza de 500 CC', 17850, 28, '500 CC', 'Se obtiene de las semillas de linaza. Es una fuente vegetal natural m&aacutes importante del &aacutecido graso  alfa linol&eacutenico\r\n(ALA) correspondiente al\r\ntipo OMEGA-3 y OMEGA-6. ', '37.jpg'),
(38, 'Frasco aceite de linaza de 250 CC', 10115, 21, '250 CC', 'Se obtiene de las semillas de linaza. Es una fuente vegetal natural m&aacutes importante del &aacutecido graso  alfa linol&eacutenico\r\n(ALA) correspondiente al\r\ntipo OMEGA-3 y OMEGA-6. ', '38.jpg'),
(39, 'Frasco de aceite de mani de 1000CC', 39270, 15, '1000 CC', 'Extraído mediante presión en frio\r\nde la semilla de maní.', '39.jpg'),
(40, 'Garrafa aceite de linaza de 20L\r\n', 618800, 10, '20 L', 'Se obtiene de las semillas de linaza. Es una fuente vegetal natural m&aacutes importante del &aacutecido graso  alfa linol&eacutenico\r\n(ALA) correspondiente al\r\ntipo OMEGA-3 y OMEGA-6. ', '40.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(300) NOT NULL,
  `last_name_user` varchar(300) NOT NULL,
  `mail_user` varchar(300) NOT NULL,
  `phone_user` int(11) NOT NULL,
  `ci_user` varchar(300) NOT NULL,
  `pw_user` varchar(300) NOT NULL,
  `direccion` varchar(1000) NOT NULL,
  `id_admin_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `name_user`, `last_name_user`, `mail_user`, `phone_user`, `ci_user`, `pw_user`, `direccion`, `id_admin_id_user`) VALUES
(8, 'yon', 'cacadsd', 'y@y.com', 424762061, '23134135', '123456', 'calle 12 carrera 9-10', 1),
(11, '65465', 'arias', 'ariascristian085@gmail.com', 2147483647, '1005719447', '123456', 'caballero', 1),
(12, 'daniel', 'lozano', 'lozano2daniel@gmail.com', 2147483647, '123456789', '123', 'dindalito', 1),
(13, 'cristian', 'arias', 'df@gmail.com', 321, '321', '123', 'caballero', 1),
(14, 'daniel', 'lozano', 'lozano2@gmail.com', 123456789, '200000', '000', 'dindalito', 1),
(15, 'VICTOR', 'ARAGON', 'alexaragon1019@gmail.com', 123456, '123456', '123456', 'GUAMO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codCli`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD KEY `numPedido` (`numPedido`),
  ADD KEY `codpro` (`codpro`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`numPedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codpro`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_admin_id_user` (`id_admin_id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `numPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`numPedido`) REFERENCES `pedido` (`numPedido`),
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`codpro`) REFERENCES `productos` (`codpro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
