-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 02:50:41
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mobile-skin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `cedula` int(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `cedula`, `telefono`, `direccion`, `correo`) VALUES
(43, 'jennifer ', 'soto', 1234567890, 987654321, 'los rosales', 'jennifersp68@gmail.com '),
(44, 'michael', 'daza', 987654321, 1234567890, 'fcgvbjknl', 'michael.daza@gmail.com ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivos`
--

CREATE TABLE `dispositivos` (
  `id_dispositivo` int(11) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funda_celular`
--

CREATE TABLE `funda_celular` (
  `id_funda` int(11) NOT NULL,
  `color` varchar(60) NOT NULL,
  `img` varchar(400) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `texto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funda_celular`
--

INSERT INTO `funda_celular` (`id_funda`, `color`, `img`, `modelo`, `texto`) VALUES
(41, 'azul', 'https://ss7.vzw.com/is/image/VerizonWireless/apple-silicone-case-with-magsafe-for-iphone-12-pro-max-capri-blue-mk043zm-a-iset?$acc-lg$', 'Iphone 12 PRO MAX', ''),
(42, 'Azul', 'https://ss7.vzw.com/is/image/VerizonWireless/apple-silicone-case-with-magsafe-for-iphone-12-pro-max-capri-blue-mk043zm-a-iset?$acc-lg$', 'Iphone 12 PRO MAX', ''),
(43, 'rojo', 'https://cdn.shopify.com/s/files/1/0604/8373/1606/products/IMG-5451777_1445x.png?v=1660452447', 'Iphone 12 PRO MAX', ''),
(45, 'naranja', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_87086621/fee_325_225_png', 'Iphone 12 PRO MAX', ''),
(47, 'rosa', 'https://ss7.vzw.com/is/image/VerizonWireless/apple-silicone-case-with-magsafe-for-iphone-12-pro-max-cantaloupe-mk073zm-a-iset?$acc-lg$', 'Iphone 12 PRO MAX', ''),
(48, 'rosa', 'https://es.t-mobile.com/sdcdn/dtmobile//images/png/products/accessories/194252781340/194252781340-large.png', 'Iphone 13 PRO MAX', ''),
(49, 'salmÃ³n', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_92294689/fee_325_225_png', 'Iphone 13 PRO MAX', ''),
(50, 'verde', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_87324138/fee_194_131_png', 'Iphone 13 PRO MAX', ''),
(51, 'gris', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_87324174/fee_325_225_png', 'Iphone 13 PRO MAX', ''),
(52, 'rojo', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_97377461/fee_325_225_png', 'Iphone 14 PRO MAX', ''),
(53, 'gris', 'https://es.t-mobile.com/sdcdn/dtmobile//images/png/products/accessories/194253416715/194253416715-large.png', 'Iphone 14 PRO MAX', ''),
(54, 'amarillo', 'https://tienda.bananacomputer.com/cms/uploads/webp/7FDCA341-5CC6-4D79-A160-EE481B976534-560-r8hhqw.webp', 'Iphone 14 PRO MAX', ''),
(55, 'naranja', 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_97350245/fee_325_225_png', 'Iphone 14 PRO MAX', ''),
(56, 'morado', 'https://cdn.shopify.com/s/files/1/0607/8303/4544/products/A10Svioletafront.png?v=1655920590', 'Samsung A10s', ''),
(57, 'amarillo', 'http://cdn.shopify.com/s/files/1/0607/8303/4544/products/A10Samarillofront.png?v=1655920122', 'Samsung A10s', ''),
(58, 'rojo', 'http://cdn.shopify.com/s/files/1/0607/8303/4544/products/A10Srojofront.png?v=1655920486', 'Samsung A10s', ''),
(59, 'negro', 'http://cdn.shopify.com/s/files/1/0607/8303/4544/products/A10Snegrofront.png?v=1655920441', 'Samsung A10s', ''),
(60, 'rojo', 'http://cdn.shopify.com/s/files/1/0607/8303/4544/products/A20Srojofront.png?v=1655925624', 'Samsung A20s', ''),
(61, 'amarillo', 'http://cdn.shopify.com/s/files/1/0607/8303/4544/products/A20Samarillofront.png?v=1655925362', 'Samsung A20s', ''),
(62, 'morado', 'http://cdn.shopify.com/s/files/1/0607/8303/4544/products/A20Svioletafront.png?v=1655925768', 'Samsung A20s', ''),
(63, 'negro', 'http://cdn.shopify.com/s/files/1/0607/8303/4544/products/A20Snegrofront.png?v=1655925536', 'Samsung A20s', ''),
(64, 'Azul', 'https://ss7.vzw.com/is/image/VerizonWireless/apple-silicone-case-with-magsafe-for-iphone-12-pro-max-capri-blue-mk043zm-a-iset?$acc-lg$', 'Iphone 12 PRO MAX', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `fecha_enviado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user_id` int(11) NOT NULL,
  `usuarios` varchar(60) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `nombre` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user_id`, `usuarios`, `tipo_usuario`, `contrasena`, `nombre`) VALUES
(7, 'admin', 1, 'admin', 'Administrador web'),
(8, 'usuario', 2, 'usuarios', 'usuario estandar'),
(21, 'jenni', 1, '01jungkook', 'jennifer\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `funda_celular`
--
ALTER TABLE `funda_celular`
  ADD PRIMARY KEY (`id_funda`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `funda_celular`
--
ALTER TABLE `funda_celular`
  MODIFY `id_funda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
