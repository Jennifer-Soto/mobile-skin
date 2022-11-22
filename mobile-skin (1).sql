-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 00:01:32
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
(5, 'naranja', 'https://iphone-semic.telework.studio/storage/193/conversions/amapoloa-card.png', 'Iphone 12 PRO MAX', ''),
(11, 'rojo', 'https://tienda.bananacomputer.com/cms/uploads/webp/623E6F9A-DF73-44EE-B42B-7BF08ABF8BD0-560-ri3mqr.webp', 'Iphone 14 PRO MAX', ''),
(19, 'Azul', 'https://ss7.vzw.com/is/image/VerizonWireless/apple-silicone-case-with-magsafe-for-iphone-12-pro-max-capri-blue-mk043zm-a-iset?$acc-lg$', 'Iphone 12 PRO MAX', ''),
(21, 'azul', 'https://ss7.vzw.com/is/image/VerizonWireless/apple-silicone-case-with-magsafe-for-iphone-12-pro-max-capri-blue-mk043zm-a-iset?$acc-lg$', 'Iphone 12 PRO MAX', ''),
(34, 'rojo', 'https://cdn.shopify.com/s/files/1/0604/8373/1606/products/IMG-5451777_823x.png?v=1660452447', 'Iphone 12 PRO MAX', ''),
(36, 'Rojo', 'https://cdn.shopify.com/s/files/1/0604/8373/1606/products/IMG-5451777_823x.png?v=1660452447', 'Iphone 12 PRO MAX', '');

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
  MODIFY `id_funda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
