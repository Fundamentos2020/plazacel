-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2020 a las 02:56:44
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

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
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `nombre` text NOT NULL,
  `precio` text NOT NULL,
  `cantidad` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `categoria` enum('Celular','Repuesto','Accesorio','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `created_at`, `update_at`, `nombre`, `precio`, `cantidad`, `image`, `categoria`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Iphone11', '19900', '1', 'iphoneX.jpg', 'Celular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `usuario` text NOT NULL,
  `password` text NOT NULL,
  `tipo` int(11) NOT NULL,
  `correo` text NOT NULL,
  `domicilio` text NOT NULL,
  `fecha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `created_at`, `update_at`, `nombre`, `apellido`, `usuario`, `password`, `tipo`, `correo`, `domicilio`, `fecha`) VALUES
(1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'carlos', 'gomez', 'jonathan', '12345', 3, 'prueba2@outlook.com', '12314a', '1991231'),
(2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'admin', 'admin', 'admin', 'admin', 1, 'prueba@outlook.com', 'Sierra leona 532', '16 agosto 1990'),
(3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'carlos', 'gomez', 'worker', '12345', 2, 'prueba5@outlook.com', '12314a', '1991231');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
